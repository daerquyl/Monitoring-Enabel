<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/db.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/entityManager.php");

include_once("collectExportManager.php");

/*
* CREE OU MET A JOUR UNE COLLECTE DANS LA BDD
* $collect : array - Collecte
*/
function _save($collect,$collectType, $fields){
	$preSaveEntityFunction = $collectType."_entity_pre_save";
	if(function_exists($preSaveEntityFunction)){
		$preSaveEntityFunction($collect,$fields);
	}
	if(isset($collect['id'])){
		$done = save($collect, $collectType, $fields);
	}else{
		$_fields = $fields;
		//$_fields = array_merge($fields, array("creator_id","date_creation","status"));
		//$_fields = array_diff($_fields, ["id"]);
		$done = save($collect, $collectType, $_fields, true);
		$collect['collect_id'] = ($id=$done);
	}
	$postSaveEntityFunction = $collectType."_entity_post_save";
	if(isset($done) && $done && function_exists($postSaveEntityFunction)){
		$done = $done && $postSaveEntityFunction($collect);
	}
	return $done;
}

/*
* LISTE TOUTES LES COLLECTES POUR UN UTILISATEUR / ROLE DONNEE
*/
function findAll($table, $role, $user_id, $campaign_id){
	if($role == "ADMIN") return findAllForAdmin($table, $campaign_id);
	if($role == "FACILITATOR") return findAllForFacilitator($table, $user_id, $campaign_id);
	if(in_array($role,["SUPERVISOR","DEPUTY","MANAGER","ADMIN_ONG"])) return findAllForSuperior($table, strtolower($role), $user_id, $campaign_id);
	return array();
}

/*
* LISTE TOUTES LES COLLECTES POUR UN FACILITATEUR
*/
function findAllForFacilitator($table, $facilitator_id, $campaign_id){
	$query = "SELECT s.name as site,". 
				(($table=='enterprise')? 'c.name as commune,' : '').
				"p.* 
				FROM ".$table." p
				LEFT JOIN site s ON s.id = p.site_id ".
				(($table=='enterprise')
					? 'LEFT JOIN commune c ON c.id = p.commune_id '
					: ''
				).
				"WHERE p.creator_id = ".$facilitator_id." 
				AND campaign_id = ".$campaign_id." 
				ORDER BY id DESC";
	return getEntityQueryBase($query);
}

/*
* LISTE TOUTES LES COLLECTES POUR UN SUPERIEUR
*/
function findAllForSuperior($table, $role, $superior_id, $campaign_id){
	$query = "SELECT s.name as site,". 
				(($table=='enterprise')? 'c.name as commune,' : '').
				"p.* 
				FROM ".$table." p
				LEFT JOIN site s ON s.id = p.site_id ".
				(($table=='enterprise')
					? 'LEFT JOIN commune c ON c.id = p.commune_id '
					: ''
				).
				"WHERE p.creator_id IN (SELECT id FROM puser WHERE ".$role."_id = ".$superior_id.")
				AND campaign_id = ".$campaign_id." 
				ORDER BY id DESC";
	return getEntityQueryBase($query);
}

/*
* LISTE TOUTES LES COLLECTES POUR UN Admin (ENABEL)
*/
function findAllForAdmin($table, $campaign_id){
	$query = "SELECT s.name as site, o.name as organization, 
				o.id as organization_id, o.logo as logo,".
				(($table=='enterprise')? 'c.name as commune,' : '').
				"p.* 
				FROM ".$table." p
				LEFT JOIN site s ON s.id = p.site_id ".
				(($table=='enterprise')
					? 'LEFT JOIN commune c ON c.id = p.commune_id '
					: ''
				).
				"LEFT JOIN puser u ON u.id = p.creator_id
				LEFT JOIN organization o ON o.id = u.organization_id
				".
				//WHERE p.status = 'SENT' AND
				"
				WHERE campaign_id = ".$campaign_id." 
				ORDER BY id";
				
	return getEntityQueryBase($query);
}


/*
* LISTE TOUTES LES COLLECTES VALIDE OU CONFIRME PAR REGION
*/
function findByRegion($region,$table,$role,$user_id, $campaign_id){
	if(in_array($role,["DEPUTY"])) 
		return findByRegionForSuperior($region, $table, strtolower($role), $user_id, "'VALIDATED'", $campaign_id);
	
	if(in_array($role,["MANAGER"])) 
		return findByRegionForSuperior($region, $table, strtolower($role), $user_id, "'CONFIRMED'", $campaign_id);

	return array();
}

/*
* LISTE TOUTES LES COLLECTES PAR REGION
*/
function findAllByRegion($region,$table,$role,$user_id, $campaign_id){
	$results = array();
	return array_merge($results,
						findByRegionForSuperior($region, $table, strtolower($role), $user_id, 
									"'CREATED','WAITING_VALIDATION','VALIDATED','CONFIRMED','SENT','REJECTED'", $campaign_id));
}

/*
* LISTE LE NOMBRE DE COLLECTES PAR REGION POUR LES SUPERIEURS
*/
function findByRegionForSuperior($region, $table, $role, $superior_id, $required_status, $campaign_id){
	$qlocationColumns = "s.name as site, s.latitude as latitude, s.longitude as longitude, r.name as region, d.name as department, c.name as commune";
	$qlocationColumns = ($table == "enterprise") ? "'' as site, '' as latitude, '' as longitude, r.name as region, d.name as department, c.name as commune" 
										  : $qlocationColumns;
	$qlocationWhere = "s.id = t.site_id 
						and s.commune_id = c.id
						and s.region_id = r.id
						and s.department_id = d.id";
	$qlocationWhere = ($table == "enterprise") 
						? "c.id = t.commune_id 
						and c.department_id = d.id
						and d.region_id = r.id"
						: $qlocationWhere;
						
	$qlocationtables = "site s, region r, department d, commune c ";
	$qlocationtables = ($table == "enterprise") ? "region r, department d, commune c " 
										  : $qlocationtables;
				
	$query = "SELECT ".$qlocationColumns." ,
				t.*
				FROM ".$table." t ,".$qlocationtables." 
				WHERE ".$qlocationWhere." 
				AND r.id = ".$region."
				AND campaign_id = ".$campaign_id."
				AND t.creator_id IN (SELECT id FROM puser WHERE ".$role."_id = ".$superior_id.")
				AND t.status in (".$required_status.")";

	return getEntityQueryBase($query);
}

/*
* LISTE LE NOMBRE DE COLLECTES PAR REGION POUR UN ADMIN
*/
/*function findByRegionForAdmin($region, $table){
	$query = "SELECT s.name as site, s.latitude as latitude, s.longitude as longitude,
				r.name as region, d.name as department, c.name as commune, t.*
				FROM ".$table." t , site s, region r, department d, commune c 
				WHERE s.id = t.site_id 
				and s.region_id = r.id
				and r.id = ".$region."
				and s.department_id = d.id
				and s.commune_id = c.id
				AND t.status = 'SENT'";

	return getEntityQueryBase($query);
}*/

/*
* RETOURNE LA COLLECTE SPECIFIE PAR SON ID
*/
function find($id, $table){
	$qlocationColumns = "s.name as site, s.latitude as latitude, s.longitude as longitude, r.name as region, d.name as department, c.name as commune";
	$qlocationColumns = ($table == "enterprise") ? "'' as site, '' as latitude, '' as longitude, r.name as region, d.name as department, c.name as commune" 
										  : $qlocationColumns;
	$qlocationWhere = "s.id = t.site_id 
						and s.commune_id = c.id
						and s.region_id = r.id
						and s.department_id = d.id";
	$qlocationWhere = ($table == "enterprise") 
						? "c.id = t.commune_id 
						and c.department_id = d.id
						and d.region_id = r.id"
						: $qlocationWhere;
						
	$qlocationtables = "site s, region r, department d, commune c ";
	$qlocationtables = ($table == "enterprise") ? "region r, department d, commune c " 
										  : $qlocationtables;
										  
	$query = "SELECT  ".$qlocationColumns." ,
				t.*
				FROM ".$table." t , site s, region r, department d, commune c 
				WHERE ".$qlocationWhere." 
				and t.id = ".$id;
				
	$collects = getEntityQueryBase($query);
	$collect = ( $collects != null && count($collects)>0) ? $collects[0] : null;
	$postFindEntityFunction = $table."_entity_post_find";
	if($collect!=null && function_exists($postFindEntityFunction)){
		$postFindEntityFunction($collect);
	}
	return $collect;
}

/*
* COMPTE TOUTES LES COLLECTES POUR UN UTILISATEUR ET UN STATUT DONNE
*/
function countByStatus($status,$table,$role,$user_id, $campaign_id){//A gerer utilisateur
	//if($role == "ADMIN") return countByStatusForAdmin($status, $table);
	if($role == "FACILITATOR") return countByStatusForFacilitator($status, $table, $user_id, $campaign_id);
	if(in_array($role,["SUPERVISOR","DEPUTY","MANAGER","ADMIN_ONG"])) return countByStatusForSuperior($status, $table, strtolower($role), $user_id, $campaign_id);
}

/*
* COMPTE TOUTES LES COLLECTES POUR UNE ONG
*/
function countByOng($ong_id,$table, $campaign_id){
	$query = "SELECT count(*) as total 
				FROM ".$table." 
				WHERE creator_id IN (SELECT id FROM puser WHERE organization_id = ".$ong_id.")
				AND campaign_id = ".$campaign_id."
				AND status = 'SENT'";
				
	$_counts = getEntityQueryBase($query);
	$count = ( $_counts != null && count($_counts)>0) ? $_counts[0]['total'] : 0;
	
	return $count;
}

/*
* COMPTE TOUTES LES COLLECTES POUR UN UTILISATEUR ET UN STATUT DONNE
*/
function countByStatusForFacilitator($status,$table,$facilitator_id, $campaign_id){
	$query = "SELECT count(*) as total 
				FROM ".$table." 
				WHERE status = '".$status."'
				AND campaign_id = ".$campaign_id."
				AND creator_id = ".$facilitator_id;
				
	$_counts = getEntityQueryBase($query);
	$count = ( $_counts != null && count($_counts)>0) ? $_counts[0]['total'] : 0;
	
	return $count;
}

/*
* COMPTE TOUTES LES COLLECTES POUR UN UTILISATEUR ET UN STATUT DONNE
*/
function countByStatusForSuperior($status,$table,$role,$superior_id, $campaign_id){
	$query = "SELECT count(*) as total 
				FROM ".$table." 
				WHERE status = '".$status."'
				AND campaign_id = ".$campaign_id."
				AND creator_id IN (SELECT id FROM puser WHERE ".$role."_id = ".$superior_id.")";
				
	$_counts = getEntityQueryBase($query);
	$count = ( $_counts != null && count($_counts)>0) ? $_counts[0]['total'] : 0;
	
	return $count;
}

/*
* COMPTE TOUTES LES COLLECTES POUR UN UTILISATEUR ET PAR REGION ET STATUS
*/
function countGroupByRegion($table,$role,$user_id, $campaign_id){
	if(in_array($role,["SUPERVISOR","ADMIN"])) 
		return countGroupByRegionForAdmin($table, $campaign_id); 
	if(in_array($role,["SUPERVISOR","DEPUTY","MANAGER","ADMIN_ONG"])) 
		return countGroupByRegionForSuperior($table, strtolower($role), $user_id, $campaign_id); 
}

/*
* COMPTE TOUTES LES COLLECTES PAR ORGANISME
*/
function countGroupByOng($table, $campaign_id){
	$qlocationWhere = "s.id = t.site_id 
						AND s.region_id = r.id";
	$qlocationWhere = ($table == "enterprise") 
						? "c.id = t.commune_id 
						and c.department_id = d.id
						and d.region_id = r.id"
						: $qlocationWhere;
						
	$qlocationtables = "site s, region r";
	$qlocationtables = ($table == "enterprise") ? "region r, department d, commune c " 
										  : $qlocationtables;
										  
	/*$query = "SELECT  ".$qlocationColumns." ,
				t.*
				FROM ".$table." t , site s, region r, department d, commune c 
				WHERE ".$qlocationWhere." 
				and t.id = ".$id;*/
				
	$query = "SELECT DISTINCT o.id as organization_id, o.name as organization, o.logo as logo,
					r.id as region_id, r.name as region, count(*) as total
				FROM ".$table." t , ".$qlocationtables.", organization o, puser p
				WHERE ".$qlocationWhere."
				AND o.id = p.organization_id
				AND p.id = t.creator_id
				AND t.status = 'SENT'				
				AND campaign_id = ".$campaign_id."
				GROUP BY o.id, o.name, o.logo, r.id, r.name
				ORDER BY r.name asc
				";	
	return getEntityQueryBase($query);
}

/*
* COMPTE TOUTES LES COLLECTES POUR UN SUPERIEUR ET PAR REGION ET STATUS
*/
function countGroupByRegionForSuperior($table,$role,$superior_id,$campaign_id){
	$qlocationWhere = "s.id = t.site_id 
						AND s.region_id = r.id";
	$qlocationWhere = ($table == "enterprise") 
						? "c.id = t.commune_id 
						and c.department_id = d.id
						and d.region_id = r.id"
						: $qlocationWhere;
						
	$qlocationtables = "site s, region r";
	$qlocationtables = ($table == "enterprise") ? "region r, department d, commune c " 
										  : $qlocationtables;

	$query = "SELECT r.id as region_id, r.name as region, status, count(*) as total
				FROM ".$table." t , ".$qlocationtables."
				WHERE ".$qlocationWhere."
				AND campaign_id = ".$campaign_id."
				AND t.creator_id IN (SELECT id FROM puser WHERE ".$role."_id = ".$superior_id.")
				GROUP BY r.id, r.name, status
				ORDER BY r.name asc
				";		
	return getEntityQueryBase($query);
}



/*
* SUPPRIME UNE COLLECTE
*/
function __delete($id, $table){
	$done =  _delete($id, $table);
	$postDeleteEntityFunction = $table."_entity_post_delete";
	if($id!=null && function_exists($postDeleteEntityFunction)){
		$done = $done && $postDeleteEntityFunction($id);
	}
	return $done;
}

/*
* TRANSITIONE LE STATUT D'UNE COLLECTE
*/
function updateStatus($collect,$action,$table){
	$collect['status'] = getNextStatus($action);
	return save($collect, $table, array("status","validator_id","date_validation"));
}

/*
* TRANSITIONE LES STATUT DES COLLECTES D'UNE REGION
*/
function updateStatusByRegion($region,$action,$current_status,$table,$campaign_id){
	$nextStatus = getNextStatus($action);

	$qlocationWhere = "site_id in (SELECT id FROM site WHERE region_id = ".$region.")";
	$qlocationWhere = ($table == "enterprise") 
						? "commune_id in 
						(SELECT c.id from commune c
						JOIN department d on d.id = c.department_id
						JOIN region r on r.id = d.region_id
						Where region_id = ".$region.")"
						: $qlocationWhere;
										  
	$query = "UPDATE ".$table." SET status='".$nextStatus."' 
			 WHERE ".$qlocationWhere."
			 AND campaign_id = ".$campaign_id."
			 AND status in ('".$current_status."')" ;
	return executeEntityQueryBase($query);
}

/*
* RETOURNE LE STATUT SUIVANT D'UNE COLLECTE POUR UNE ACTION
*/
function getNextStatus($action){
	if($action == "SUBMIT") return "WAITING_VALIDATION";
	if($action == "VALIDATE") return "VALIDATED";
	if($action == "REJECT") return "REJECTED";
	if($action == "CONFIRM") return "CONFIRMED";
	if($action == "SEND") return "SENT";
}

/*
* RETOURNE LA DESCRIPTION STATUS DE LA COLLECTE
*/
function getStatusDescription($status){
	if($status == 'CREATED') return "CREEE";
	if($status == 'WAITING_VALIDATION') return "EN ATTENTE";
	if($status == 'VALIDATED') return "VALIDEE";
	if($status == 'CONFIRMED')return "CONFIRMEE";
	if($status == 'SENT') return 'SOUMIS';
	if($status == 'REJECTED') return "REJETEE";
}

/*
* RETOURNE LA COULEUR D'UN STATUT
*/
function getStatusColor($status){
	if($status == 'CREATED') return 'info';
	if($status == 'WAITING_VALIDATION') return 'warning';
	if($status == 'VALIDATED') return 'primary';
	if($status == 'CONFIRMED') return 'primary';
	if($status == 'SENT') return 'success';
	if($status == 'REJECTED') return 'danger';
}

/*
* ENREGISTRE LE REJET DE LA COLLECTE
*/
function saveRejectReason($reject){
	save($reject, "reject", ["reason","date_creation","creator_id","collect_id","creator_name"]);
}

/*
*RETOURNE LA LISTE DES REJETS POUR UNE COLLECTE
*/
function getRejects($collect_id){
	$query = "SELECT * FROM reject WHERE collect_id='".$collect_id."' ORDER BY date_creation DESC";
	return array_merge(array(),getEntityQueryBase($query));
}