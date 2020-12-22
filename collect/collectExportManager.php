<?php

function exportData($table, $role, $organization_id, $user_id, $campaign_id){

	$collects_csv_format = getCSVFormattedCollectData($table, $role, $organization_id, $user_id, $campaign_id);
	
	//Retour des donnees.
	header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename="'.$table.".csv".'"');
	header('Content-Disposition: inline; filename="'.$table.".csv".'"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	//header('Content-Length: ' . strlen($collects_csv_format));
	ob_clean();
	ob_flush();
	echo trim($collects_csv_format);
    exit;
}

function getCSVFormattedCollectData($table, $role, $organization_id, $user_id, $campaign_id){
	global $fields, $fields_fr;
						
	//Recuperer les informations brutes des collectes en fonction du niveau d'acces (role)					
	$collects = getExportData($table, $role, $organization_id, $user_id, $campaign_id);
	
	//Formater les donnees des collectes en chaine dans un tableau indexe par l'id de la collecte
	//en fonction des champs a recuperer 
	$collects_csv_format_array = getPrincipalDataArray($collects, $fields, $fields_fr);
	
	//Complete with others data as employees or speculation
	$collects_csv_format_array = completeWithComplementDataIfNeeded($campaign_id, $table, $collects_csv_format_array, $fields_fr);
	
	//Formattage des donnes a exporter en CSV - Ajouter du line break
	return format_to_lines($collects_csv_format_array);
}

function getPrincipalDataArray($collects, $reference_fields, $locale_fields){
	$collects_csv_format_array = [];
	if($collects !=null && count($collects) >= 0){
		$collect0 = $collects[0];
		$filtered_fields = array();
		$header = "";
		foreach($reference_fields as $field_name){
			if(isset($collect0[$field_name])){//Ne recuperer que les champs existants dans les infos brute
				//Creation du header pour les collectes
				$header .= ";".str_replace(";"," ",$locale_fields[$field_name]);
				$filtered_fields[] = $field_name;
			}
		}
		$header = substr($header,1);
		$collects_csv_format_array = convert_to_csv_array($collects, $header, $filtered_fields);
	}
	return $collects_csv_format_array ;
}

function completeWithComplementDataIfNeeded($campaign_id, $table, $principal_data, $locale_fields){
	$collects_csv_format_array = $principal_data;
	
	//Si export des fiches avec employes
	if(in_array($table,['exploitation', 'enterprise', 'cooperative'])){
		$collects_csv_format_array = completeWithcomplementData($campaign_id, $table, "employee", $collects_csv_format_array, $locale_fields);
	}
	
	//Si export des fiches avec speculations
	if(in_array($table,['exploitation'])){
		$collects_csv_format_array = completeWithcomplementData($campaign_id, $table, "speculation", $collects_csv_format_array, $locale_fields);
	}
	
	return $collects_csv_format_array;
}

function completeWithcomplementData($campaign_id, $table, $complement_table, $principal_data, $locale_fields){
	$complement_ref_column = getReferenceColumn($complement_table); 
	$complement_fields = getComplementFields($complement_table); 
	
	$collects_csv_format_array = $principal_data;
	
	//Recuperer la liste de tous les employes pour cette campagne et pour le type de fiche en cours de traitement
	$complements = getExportComplementsData($campaign_id, $table, $complement_table);
	
	//Formatter les donnees des employes en chaine de character dans un tableau indexe par l'id de l'employe
	$header_complement = "";
	$complement_csv_format_array = [];
	if($complements !=null && count($complements) >= 0){
		$filtered_fields = [];
		//Creation du header pour les employes
		foreach($complement_fields as $field_name){
			$header_complement .= ";".str_replace(";"," ",$locale_fields[$field_name])."%";//Header avec parametre a modifier lors de la construction pour plusieurs employes
			$filtered_fields[] = $field_name;
		}
		$header_complement = substr($header_complement,1);
		$complement_csv_format_array = convert_to_csv_array($complements, $header_complement, $filtered_fields);
	}
	
	//Linearisation des chaines pour les fiches avec les chaines pour les employes 
	//en fonction de l'id de la collecte
	
	//Goup by des id complement par collecte
	$collects_complements = getComplementsForCollects($complements, $complement_ref_column, $table);

	//Liaison des chaines de donness de collectes aux chaines de donnee complements correspondant
	$max_complement = 0;//Maximum complements a calculer
	foreach($principal_data as $id => $collect_line){
		$current_complement_count = 0;
		if(isset($collects_complements[$id])){
			//$i=1;
			foreach($collects_complements[$id] as $complement){
				//if($i++ <= $max_complement){//
				//Compter le nombre d'complement pour la fiche en cours
				$current_complement_count++;
				$collects_csv_format_array[$id] .= substr($complement_csv_format_array[$complement],strpos($complement_csv_format_array[$complement],";"));
				//}
			}
		}
		//Si nombre employe fiche courante superieur a nbre complement fiche precedente,
		//nouveau nombre == max 
		if($max_complement < $current_complement_count){
			$max_complement = $current_complement_count;
		}
	}

	//Mise a jour du header avec n* le header des complements
	for($i=1; $i<=$max_complement; $i++){
		$copy_header_complement = str_replace("%"," ".$i, $header_complement);
		$collects_csv_format_array[0] .= $copy_header_complement;
	}
	
	return padd_csv_array($collects_csv_format_array);
}

function getReferenceColumn($complement_table){
	if($complement_table == "employee") return "employee_name";
	if($complement_table == "speculation") return "speculation";
}

function getComplementFields($complement_table){
	global $fields_employee, $fields_speculation;
	
	if($complement_table == "employee") return $fields_employee;
	if($complement_table == "speculation") return $fields_speculation;
}

/*
* RETOURNE LES DONNEES A EXPORTER
*/
function getExportComplementsData($campaign_id, $table, $complement_table){
	$query = "SELECT * FROM ".$complement_table." WHERE collect_id like '%".$table."%'";
	return getEntityQueryBase($query);
}

function getComplementsForCollects($complements, $complement_ref_column, $table){
	$collects_complements = [];
	foreach($complements as $complement){
		$collect_id = str_ireplace($table,"",$complement['collect_id']);
		if(!empty(trim($complement[$complement_ref_column]))){
			if(isset($collects_complements[$collect_id])){
				$collects_complements[$collect_id][] = $complement['id'];
			}else{
				$collects_complements[$collect_id] = [$complement['id']];
			}
		}
	}
	return $collects_complements;
}

function getExportData($table, $role, $organization_id, $user_id, $campaign_id){
	if($role == "FACILITATOR") return getExportDataForFacilitator($table, $user_id, $campaign_id);
	if(in_array($role, ["SUPERVISOR", "DEPUTY", "MANAGER"])) return getExportDataForSuperior($table,$role,$user_id, $campaign_id);
	if($role == "ADMIN_ONG") return getExportDataForAdminOng($table, $organization_id, $campaign_id);
	if($role == "ADMIN") return getExportDataForAdmin($table, $campaign_id);
}

function getQueryTemplateDataFor($collectType){
	$qlocationSelect = "s.name as site, c.name as commune";
	$qlocationSelect = ($collectType == "enterprise") 
						? "c.name as commune"
						: $qlocationSelect;

	$qlocationWhere = "s.id = t.site_id 
						AND s.region_id = r.id
						AND s.department_id = d.id
						AND s.commune_id = c.id";
	$qlocationWhere = ($collectType == "enterprise") 
						? "c.id = t.commune_id 
						AND c.department_id = d.id
						AND d.region_id = r.id"
						: $qlocationWhere;

	$qlocationTables = "site s, region r, department d, commune c ";
	$qlocationTables = ($collectType == "enterprise") 
						? "region r, department d, commune c " 
						: $qlocationTables;
						
	return array(
	"select" => $qlocationSelect,
	"tables" => $qlocationTables,
	"where" => $qlocationWhere	
	);
}

function getExportDataForFacilitator($table,$facilitator_id, $campaign_id){
	$queryTemplateData = getQueryTemplateDataFor($table);

	$query = "SELECT t.*, o.name as organization,".$queryTemplateData['select'].", r.name as region, d.name as department, cp.title as campaign, 
				p.name as creator, ps.name as validator
				FROM ".$table." t, organization o, campaign cp, ".$queryTemplateData['tables'].",  puser p, puser ps
				WHERE o.id = p.organization_id AND p.id = t.creator_id AND p.supervisor_id = ps.id
				AND cp.id = campaign_id AND campaign_id = ".$campaign_id."
				AND  ".$queryTemplateData['where']."
				AND t.creator_id = ".$facilitator_id;
				
	return getEntityQueryBase($query);
}

function getExportDataForSuperior($table,$role,$superior_id, $campaign_id){
	$queryTemplateData = getQueryTemplateDataFor($table);
						
	$query = "SELECT t.*, o.name as organization,".$queryTemplateData['select'].", r.name as region, d.name as department, cp.title as campaign,
				p.name as creator, ps.name as validator
				FROM ".$table." t, organization o, campaign cp,".$queryTemplateData['tables'].", puser p, puser ps
				WHERE o.id = p.organization_id AND p.id = t.creator_id AND p.supervisor_id = ps.id
				AND cp.id = campaign_id AND campaign_id = ".$campaign_id."
				AND ".$queryTemplateData['where']."
				AND t.creator_id IN (SELECT id FROM puser WHERE ".$role."_id = ".$superior_id.")";
				
	return getEntityQueryBase($query);
}

function getExportDataForAdminOng($table, $organization_id, $campaign_id){
	$queryTemplateData = getQueryTemplateDataFor($table);
						
	$query = "SELECT t.*, o.name as organization,".$queryTemplateData['select'].", r.name as region, d.name as department, cp.title as campaign,
				p.name as creator, ps.name as validator
				FROM ".$table." t, organization o, campaign cp, ".$queryTemplateData['tables'].", puser p, puser ps
				WHERE o.id = p.organization_id AND p.id = t.creator_id  AND p.supervisor_id = ps.id
				AND o.id = ".$organization_id."
				AND cp.id = campaign_id AND campaign_id = ".$campaign_id."
				AND ".$queryTemplateData['where'];
	return getEntityQueryBase($query);
}

function getExportDataForAdmin($table, $campaign_id){
	$queryTemplateData = getQueryTemplateDataFor($table);

	$query = "SELECT t.*, o.name as organization,".$queryTemplateData['select'].", r.name as region, d.name as department, cp.title as campaign,
				p.name as creator, ps.name as validator
				FROM ".$table." t, organization o, campaign cp, ".$queryTemplateData['tables'].", puser p, puser ps
				WHERE t.status = 'SENT' 
				AND cp.id = campaign_id AND campaign_id = ".$campaign_id."
				AND o.id = p.organization_id AND p.id = t.creator_id AND p.supervisor_id = ps.id
				AND ".$queryTemplateData['where'];
				
	return getEntityQueryBase($query);
}
