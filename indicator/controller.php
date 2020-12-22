	<?php
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/guard.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/form_binding_utils.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/exposed/siteEntityManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/exposed/locationEntityManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/exposed/organizationEntityManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/exposed/campaignEntityManager.php");
require_once("indicatorEntityManager.php");

/*
* GENERE TOUS LES INDICATEURS
*/

$indicators_keys = ['total_created_job','etp','young_net_moy_revenue','total_ha_irrigated','total_ha_running',
						'total_ha_irrigated_young','total_ha_legally_secured','yield_per_ha_for_rice',
						'ca_per_ha_for_rice','ca_per_ha_for_horticulture','revenu_per_ha_for_rice',
						'revenu_per_ha_for_horticulture','used_good_practises_percentage',
						'contractual_agriculture_evolution_rate','mpmes','credit_access_exp','credit_access_mpme',
						'mpme_ca_increase','mpme_earnings','total_created_job_young','total_trained_young',
						];
						
$sites = getSites();
$communes = getCommunes();
$departments = getDepartments();
$regions = getRegions();
$ongs = findAllOrganizations();
$campaigns = findAllCampaigns();
$projects = [['name'=>'Enabel']];

$serialized_indicators_path = "saved/indicators";

function generate($campaign){
	global $indicators_keys;
	global $serialized_indicators_path;

	global $campaigns;

	global $sites;
	global $communes;
	global $departments;
	global $regions;
	global $ongs;
	global $projects;
	

	$indicators = null;
	if(file_exists($serialized_indicators_path."_".$campaign['id'].".gen")){
		$indicators = unserialize_indicators($campaign['id']);
	}else{
		$indicators = generateIndicators($campaign['id']);
		serialize_indicators($indicators, $campaign['id']);
	}
	
	$current_campaign_id = isset($_SESSION['campaign']) ? $_SESSION['campaign']['id'] : -1;
	$is_active_campaign = $current_campaign_id == $campaign['id']; 
	$indicator_campaign = $is_active_campaign ? "COURANT : ".$campaign['title'] : "ARCHIVE : ".$campaign['title'];
	$campaign_to_generate = $campaign['id'];
	require_once('index.php');
}

function generateIndicators($campaign_id){
	global $indicators_keys;
	
	$collects_array = array(
	'perimeter' => findAll('perimeter',$campaign_id),
	'cooperative' => findAll('cooperative',$campaign_id),
	'enterprise' => findAll('enterprise',$campaign_id),
	'exploitation' => findAll('exploitation',$campaign_id)
	);
	
	$collects_array_previous = array(
	'perimeter' => findAllPrevious('perimeter',$campaign_id),
	'cooperative' => findAllPrevious('cooperative',$campaign_id),
	'enterprise' => findAllPrevious('enterprise',$campaign_id),
	'exploitation' => findAllPrevious('exploitation',$campaign_id)
	);
	
	$indicators = array(
		'total_created_job' => array(
								'data' => generateIndicator("total_created_job", array_merge($collects_array['enterprise'],$collects_array['cooperative'],$collects_array['exploitation'])),
								'description' => "<strong>I1:</strong>Nombre d'emplois cr&eacute;&eacute;s",
								'description2' => "I1;Nombre d'emplois crees",
								),
		'etp' => array(
								'data' => generateIndicator("etp", array_merge($collects_array['exploitation'],$collects_array['enterprise'],$collects_array['cooperative'])),
								'description' => "<strong>I1-1:</strong>Nombre d'emplois cr&eacute;&eacute;s en &eacute;quivalents temps plein",
								'description2' => "I1-1;Nombre d'emplois crees en equivalents temps plein",
								),
/*		'young_net_revenue_evolution' => array(
								'data' => generateIndicator("young_net_revenue_evolution", 
															$collects_array['exploitation'], $collects_array_previous['exploitation'], 
															false, true, "EVOLUTION"),
								'description' => "<strong>I2:</strong>% Croissance du revenu des jeunes travaillant dans les domaines agroalimentaires",
								'prefix' => "%",
								),*/
		'young_net_moy_revenue' => array(
								'data' => generateIndicator("young_net_moy_revenue", array_merge($collects_array['enterprise'],$collects_array['exploitation'], $collects_array['cooperative']), 
															null, true, false, "DIVISION"),
								'description' => "<strong>I2:</strong>Revenu moyen des jeunes travaillant dans les domaines agroalimentaires",
								'description2' => "I2;Revenu moyen des jeunes travaillant dans les domaines agroalimentaires",
								),
		'total_ha_irrigated' => array(
								'data' => generateIndicator("total_ha_irrigated", $collects_array['perimeter']),
								'description' => "<strong>I3:</strong>Nombre d'hectares fonctionnels",
								'description2' => "I3;Nombre d'hectares fonctionnels"
								),
		'total_ha_running' => array(
								'data' => generateIndicator("total_ha_running", $collects_array['perimeter']),
								'description' => "<strong>I4:</strong>Nombre d'hectares fonctionnels en production",
								'description2' => "I4;Nombre d'hectares fonctionnels en production",
								),
		'total_ha_irrigated_young' => array(
								'data' => generateIndicator("total_ha_irrigated_young", $collects_array['perimeter']),
								'description' => "<strong>I5:</strong>Hectares fonctionnels exploit&eacute;s par les jeunes",
								'description2' => "I5;Hectares fonctionnels exploites par les jeunes",
								),
		'total_ha_legally_secured' => array(
								'data' => generateIndicator("total_ha_legally_secured", $collects_array['perimeter']),
								'description' => "<strong>I6:</strong>Hectares fonctionnels s&eacute;curis&eacute;s (d&eacute;lib&eacute;r&eacute;s)",
								'description2' => "I6;Hectares fonctionnels securises (deliberes)",
								),
		'yield_per_ha_for_rice' => array(
								'data' => generateIndicator("yield_per_ha_for_rice", 
															$collects_array['exploitation'], $collects_array_previous['exploitation'], 
															true, true, "BI_PERCENTAGE", "EVOLUTION"),
								'description' => "<strong>I7:</strong>% Evolution du rendement par hectare de la riziculture",
								'description2' => "I7;% Evolution du rendement par hectare de la riziculture",
								'prefix' => "%",
								),
		'ca_per_ha_for_rice' => array(
								'data' => generateIndicator("ca_per_ha_for_rice", 
															$collects_array['exploitation'], $collects_array_previous['exploitation'], 
															true, true, "BI_PERCENTAGE", "EVOLUTION"),
								'description' => "<strong>I8:</strong>% Accroissement du chiffre d'affaire par hectare pour le riz",
								'description2' => "I8;% Accroissement du chiffre d'affaire par hectare pour le riz",
								'prefix' => "%",
								),
		'ca_per_ha_for_horticulture' => array(
								'data' => generateIndicator("ca_per_ha_for_horticulture", 
															$collects_array['exploitation'], $collects_array_previous['exploitation'], 
															true, true, "BI_PERCENTAGE", "EVOLUTION"),
								'description' => "<strong>I9:</strong>% Accroissement du chiffre d'affaire par hectare pour l'horticulture",
								'description2' => "I9;% Accroissement du chiffre d'affaire par hectare pour l'horticulture",
								'prefix' => "%",
								),
		'revenu_per_ha_for_rice' => array(
								'data' => generateIndicator("revenu_per_ha_for_rice", 
															$collects_array['exploitation'], null,
															true, false, "DIVISION"),
								'description' => "<strong>I10:</strong>Revenu par hectare pour le riz",
								'description2' => "I10;Revenu par hectare pour le riz",
								),
		'revenu_per_ha_for_horticulture' => array(
								'data' => generateIndicator("revenu_per_ha_for_horticulture", 
															$collects_array['exploitation'], null,
															true, false, "DIVISION"),
								'description' => "<strong>I11:</strong>Revenu par hectare pour l'horticulture",
								'description2' => "I11;Revenu par hectare pour l'horticulture",
								),
		'used_good_practises_percentage' => array(
								'data' => generateIndicator("used_good_practises_percentage", 
															$collects_array['exploitation'], null, true, false, "PERCENTAGE"),
								'description' => "<strong>I12:</strong>%Producteurs appliquant les bonnes pratiques agronomiques et agro&eacute;cologiques
													parmi ceux qui sont encadr&eacute;s par le projet",
								'description2' => "I12;%Producteurs appliquant les bonnes pratiques agronomiques et agroecologiques parmi ceux qui sont encadres par le projet",
								'prefix' => "%",
								),
		'contractual_agriculture_evolution_rate' => array(
								'data' => generateIndicator("contractual_agriculture_evolution_rate", 
															$collects_array['exploitation'], null, 
															true, false, "PERCENTAGE"),
								'description' => "<strong>I13:</strong>Taux d'&eacute;volution de la p&eacute;n&eacute;tration de l'agriculture contractuelle sur le volume de production commercialis&eacute;",
								'description2' => "I13;Taux d'evolution de la penetration de l'agriculture contractuelle sur le volume de production commercialise",
								'prefix' => "%",
								),
		'mpmes' => array(
								'data' => generateIndicator("mpmes", $collects_array['enterprise']),
								'description' => "<strong>I14:</strong>Nombre de (MPME) dans les cha&icirc;nes de valeur agro-alimentaires appuy&eacue;es par le projet",
								'description2' => "I14;Nombre de (MPME) dans les chaines de valeur agro-alimentaires appuyees par le projet",
								),
		'credit_access_exp' => array(
								'data' => generateIndicator("credit_access_exp", $collects_array['exploitation']),
								'description' => "<strong>I15-1:</strong>Nombre d'exploitants appuy&eacute;s par le projet qui ont acc&egrave;s &agrave; des services financiers adapt&eacute;s",
								'description2' => "I15-1;Nombre d'exploitants appuyes par le projet qui ont acces a des services financiers adaptes",
								),
		'credit_access_mpme' => array(
								'data' => generateIndicator("credit_access_mpme", $collects_array['enterprise']),
								'description' => "<strong>I15-2:</strong>Nombre de MPME  appuy&eacute;s par le projet qui ont acc&egrave;s &agrave; des services financiers adapt&eacute;s",
								'description2' => "I15-2;Nombre de MPME  appuyes par le projet qui ont acces a des services financiers adaptes",
								),
		'mpme_ca_increase' => array(
								'data' => generateIndicator("mpme_ca_increase", $collects_array['enterprise'], null, true, false, "EVOLUTION"),
								'description' => "<strong>I16:</strong>% d'augmentation du chiffre d'affaire annuel des MPME",
								'description2' => "I16;% d'augmentation du chiffre d'affaire annuel des MPME",
								'prefix' => "%",
								),
		'mpme_earnings' => array(
								'data' => generateIndicator("mpme_earnings", $collects_array['enterprise'], null, true, false, "PERCENTAGE"),
								'description' => "<strong>I17:</strong>Taux (%) de la marge b&eacute;n&eacute;ficiaire annuelle des MPME",
								'description2' => "I17;Taux (%) de la marge beneficiaire annuelle des MPME",
								'prefix' => "%",
								),
		'total_created_job_young' => array(
								'data' => generateIndicator("total_created_job_young", array_merge($collects_array['enterprise'])),
								'description' => "<strong>I18:</strong>Nombre d'emplois pour les jeunes dans les AGR et les MPME",
								'description2' => "I18;Nombre d'emplois pour les jeunes dans les AGR et les MPME",
								),
		'total_trained_young' => array(
								'data' => generateIndicator("total_trained_young", array_merge($collects_array['enterprise'],$collects_array['exploitation'], $collects_array['cooperative'])),
								'description' => "<strong>I19:</strong>Nombre de jeunes form&eacute;s dans le cadre du projet actifs et dans la production et les MPME",
								'description2' => "I19;Nombre de jeunes formes dans le cadre du projet actifs et dans la production et les MPME",
								),
/*		'capitalization_product' => array(
								'data' => generateIndicator("capitalization_product", array_merge($collects_array['enterprise'],$collects_array['exploitation'])),
								'description' => "<strong>I20:</strong>Nombre de produits de capitalisation r&eacute;alis&eacute;s",
								),
		'notoriety' => array(
								'data' => generateIndicator("notoriety", array_merge($collects_array['enterprise'],$collects_array['exploitation'])),
								'description' => "<strong>I21:</strong>Niveau de notori&eacute;t&eacute; de bonnes pratiques et exp&eacute;riences faisant l'objet de communication grand public",
								),*/
	);
	
	return $indicators;
}

/*
* GENERE UN INDICATEUR PAR SITE, COMMUNE, DEPARTMENT, REGION, ONG
*/
function generateIndicator($indicator, $collects_1, $collects_2 = null, $binaryCalculation = false, $biCollect = false, $calcul_type_inner="", $calcul_type_outer=""){

	$criterias = ['site','commune','department','region','ong','project'];
	$indicators_by_criteria = array(
	'site' => array(),
	'commune' => array(),
	'department' => array(),
	'region' => array(),
	'ong' => array(),
	'project' => array()
	);
	

	if(!$binaryCalculation && !$biCollect){
		setUnaryIndicator($collects_1, $criterias, $indicator, $indicators_by_criteria);
	}else if($binaryCalculation && !$biCollect){
		setBinaryIndicator($collects_1, $criterias, $indicator, $indicators_by_criteria, $calcul_type_inner);
	}else if(!$binaryCalculation && $biCollect){
		setBiCollectUnaryIndicator($collects_1, $collects_2, $criterias, $indicator, $indicators_by_criteria, $calcul_type_inner);
	}else{
		setBiCollectBinaryIndicator($collects_1, $collects_2, $criterias, $indicator, $indicators_by_criteria, $calcul_type_inner, $calcul_type_outer);
	}
	return $indicators_by_criteria;
}

function setUnaryIndicator($collects, $criterias, $indicator, &$indicators_by_criteria){
	foreach($collects as $collect){
		$indicator_value = $indicator($collect);
		foreach($criterias as $criteria){
			if(!isset($indicators_by_criteria[$criteria][$collect[$criteria]])){
				$indicators_by_criteria[$criteria][$collect[$criteria]] = 0;
			}
			$indicators_by_criteria[$criteria][$collect[$criteria]] += $indicator_value;
		}
	}
}

function setBinaryIndicator($collects, $criterias, $indicator, &$indicators_by_criteria, $calcul_type){
	foreach($collects as $collect){
		$indicator_data = $indicator($collect);
		foreach($criterias as $criteria){
			if(!isset($indicators_by_criteria[$criteria][$collect[$criteria]."_value1"])){
				$indicators_by_criteria[$criteria][$collect[$criteria]."_value1"] = 0;
			}
			if(!isset($indicators_by_criteria[$criteria][$collect[$criteria]."_value2"])){
				$indicators_by_criteria[$criteria][$collect[$criteria]."_value2"] = 0;
			}
			$indicators_by_criteria[$criteria][$collect[$criteria]."_value1"] += $indicator_data['value1'];
			$indicators_by_criteria[$criteria][$collect[$criteria]."_value2"] += $indicator_data['value2'];
		}
	}

	inner_calculation($calcul_type, $collects, $criterias, $indicators_by_criteria);
}

function setBiCollectUnaryIndicator($collects_1, $collects_2, $criterias, $indicator, &$indicators_by_criteria, $calcul_type){
	foreach($collects_1 as $collect){
		$indicator_data = $indicator($collect);
		foreach($criterias as $criteria){
			if(!isset($indicators_by_criteria[$criteria][$collect[$criteria]."_value1"])){
				$indicators_by_criteria[$criteria][$collect[$criteria]."_value1"] = 0;
			}
			$indicators_by_criteria[$criteria][$collect[$criteria]."_value1"] += $indicator_data['value1'];
		}
	}
	
	foreach($collects_2 as $collect){
		$indicator_data = $indicator($collect);
		foreach($criterias as $criteria){
			if(!isset($indicators_by_criteria[$criteria][$collect[$criteria]."_value2"])){
				$indicators_by_criteria[$criteria][$collect[$criteria]."_value2"] = 0;
			}
			$indicators_by_criteria[$criteria][$collect[$criteria]."_value2"] += $indicator_data['value1'];
		}
	}
	
	inner_calculation($calcul_type, array_merge($collects_1, $collects_2), $criterias, $indicators_by_criteria);
}

function setBiCollectBinaryIndicator($collects_1, $collects_2, $criterias, $indicator, &$indicators_by_criteria, $calcul_type_inner, $calcul_type_outer){
	foreach($collects_1 as $collect){
		$indicator_data = $indicator($collect);
		foreach($criterias as $criteria){
			if(!isset($indicators_by_criteria[$criteria][$collect[$criteria]."_value11"])){
				$indicators_by_criteria[$criteria][$collect[$criteria]."_value11"] = 0;
			}
			if(!isset($indicators_by_criteria[$criteria][$collect[$criteria]."_value12"])){
				$indicators_by_criteria[$criteria][$collect[$criteria]."_value12"] = 0;
			}
			$indicators_by_criteria[$criteria][$collect[$criteria]."_value11"] += $indicator_data['value1'];
			$indicators_by_criteria[$criteria][$collect[$criteria]."_value12"] += $indicator_data['value2'];
		}
	}		
	
	foreach($collects_2 as $collect){
		$indicator_data = $indicator($collect);
		foreach($criterias as $criteria){
			if(!isset($indicators_by_criteria[$criteria][$collect[$criteria]."_value21"])){
				$indicators_by_criteria[$criteria][$collect[$criteria]."_value21"] = 0;
			}
			if(!isset($indicators_by_criteria[$criteria][$collect[$criteria]."_value22"])){
				$indicators_by_criteria[$criteria][$collect[$criteria]."_value22"] = 0;
			}
			$indicators_by_criteria[$criteria][$collect[$criteria]."_value21"] += $indicator_data['value1'];
			$indicators_by_criteria[$criteria][$collect[$criteria]."_value22"] += $indicator_data['value2'];
		}
	}

	//INNER
	inner_calculation($calcul_type_inner, array_merge($collects_1, $collects_2), $criterias, $indicators_by_criteria);

	//OUTER
	inner_calculation($calcul_type_outer, array_merge($collects_1, $collects_2), $criterias, $indicators_by_criteria);

}

function inner_calculation($type, $collects, $criterias, &$indicators_by_criteria){
	if($type == "PERCENTAGE"){
		percentage_calcul_type($collects, $criterias, $indicators_by_criteria);
	}
	if($type == "DIVISION"){
		division_calcul_type($collects, $criterias, $indicators_by_criteria);
	}
	if($type == "EVOLUTION"){
		evolution_calcul_type($collects, $criterias, $indicators_by_criteria);
	}
	if($type = "BI_PERCENTAGE"){
		bi_percentage_calcul_type($collects, $criterias, $indicators_by_criteria);
	}		
}

function division_calcul_type($collects, $criterias, &$indicators_by_criteria){
	foreach($criterias as $criteria){
		foreach($collects as $collect){
			if(isset($indicators_by_criteria[$criteria][$collect[$criteria]])) continue;
			$indicators_by_criteria[$criteria][$collect[$criteria]] = 
				divide($indicators_by_criteria[$criteria][$collect[$criteria]."_value1"],
						$indicators_by_criteria[$criteria][$collect[$criteria]."_value2"]);
		}
	}
}

function percentage_calcul_type($collects, $criterias, &$indicators_by_criteria){
	foreach($criterias as $criteria){
		foreach($collects as $collect){
			if(isset($indicators_by_criteria[$criteria][$collect[$criteria]])) continue;
			$indicators_by_criteria[$criteria][$collect[$criteria]] = 
				percent($indicators_by_criteria[$criteria][$collect[$criteria]."_value1"],
						$indicators_by_criteria[$criteria][$collect[$criteria]."_value2"]);
		}
	}
}

function bi_percentage_calcul_type($collects, $criterias, &$indicators_by_criteria){
	foreach($criterias as $criteria){
		foreach($collects as $collect){
			if(!isset($indicators_by_criteria[$criteria][$collect[$criteria]."_value1"])){
				if(isset($indicators_by_criteria[$criteria][$collect[$criteria]."_value11"])){
					$indicators_by_criteria[$criteria][$collect[$criteria]."_value1"] = 
						percent($indicators_by_criteria[$criteria][$collect[$criteria]."_value11"],
								$indicators_by_criteria[$criteria][$collect[$criteria]."_value12"]);
				}
			}
			if(!isset($indicators_by_criteria[$criteria][$collect[$criteria]."_value2"])){
				if(isset($indicators_by_criteria[$criteria][$collect[$criteria]."_value21"])){
					$indicators_by_criteria[$criteria][$collect[$criteria]."_value2"] = 
						percent($indicators_by_criteria[$criteria][$collect[$criteria]."_value21"],
								$indicators_by_criteria[$criteria][$collect[$criteria]."_value22"]);
				}
			}
		}
	}
}

function evolution_calcul_type($collects, $criterias, &$indicators_by_criteria){
	foreach($criterias as $criteria){
		foreach($collects as $collect){
			if(isset($indicators_by_criteria[$criteria][$collect[$criteria]])) continue;
			$new_value = $indicators_by_criteria[$criteria][$collect[$criteria]."_value1"] ?? 0;
			$old_value = $indicators_by_criteria[$criteria][$collect[$criteria]."_value2"] ?? "";
			if(is_numeric($old_value) && $old_value!=0 && is_numeric($new_value)){
				//$indicators_by_criteria[$criteria][$collect[$criteria]] = ((($new_value * 100) / $old_value) - 100)."%";
				$indicators_by_criteria[$criteria][$collect[$criteria]] = ((($new_value - $old_value) / $old_value) * 100);
			}else{
				$indicators_by_criteria[$criteria][$collect[$criteria]] = "N/A";
			}
		}
	}
}

/*
* GENERE UN INDICATEUR PAR SITE, COMMUNE, DEPARTMENT, REGION, ONG ET SOUS CRITERES
*/
function generateIndicatorWithSubCriteria($collect){
	 
}

/*
*I1 - NOMBRE D'EMPLOIS CREES
*/
function total_created_job($collect){
	return employee_count($collect);
}

/*
*I1-1 - NOMBRE D'EMPLOIS CREES SELON ETP
*/
function etp($collect){// A REFAIRE
	return round(etp_count($collect),2);
}

/*
*I2- (%) CROISSANCE DU REVENU DES JEUNES TRAVAILLANT DANS LES DOMAINES AGROALIEMENTAIRES
*/
function young_net_moy_revenue($collect){// A VALIDER PAR BEN
	//((R2 - R1) / R1) * 100
	/*return array(
		'value1' => ($collect['is_adult'])? 0 : $collect['net_revenue'],
	);*/
	return array(
		'value1' => young_revenue_total($collect),
		'value2' => young_employee_count($collect),

	);
}

/*
*I3 - NOMBRE D'HECTARES FONCTIONNELLEMENT IRRIGUE
*/
function total_ha_irrigated($collect){
	return $collect['total_ha_irrigated'];
}

/*
*I4 - NOMBRE D'HECTARES FONCTIONNELLEMENT IRRIGUE EXPLOITE PAR DES JEUNES
*/
function total_ha_irrigated_young($collect){//UNIQUEMENT LES JEUNES
	return $collect['men_workers_lt35'] + $collect['women_workers_lt35'];
}

/*
*I5 - NOMBRE D'HECTARES FONCTIONNELLEMENT IRRIGUE EN PRODUCTION CONTINU
*/
function total_ha_running($collect){
	return $collect['total_ha_running'];
}

/*
*I6 - NOMBRE D'HECTARES FONCTIONNELLEMENT IRRIGUE JURIDIQUEMENT SECURISE
*/
function total_ha_legally_secured($collect){
	return $collect['total_ha_legally_secured'];
}

/*
*I7 (%)EVOLUTION DU RENDEMENT PAR HECTARE DE LA RIZICULTURE
*/
function yield_per_ha_for_rice($collect){
	$qte_collect = 0;
	$planted_area = 0;	
	set_child($collect, 'speculation');
	$speculations = $collect['speculation'];
	foreach($speculations as $speculation){
		if($speculation['speculation'] == "RIZ"){
			$qte_collect += $speculation['harvest_quantity'];
			$planted_area += $speculation['planted_area'];	
		}
	}
	$data = array(
				'value1' => $qte_collect,//SOMME QUANTITE COLLECTE SPECULATION 
				'value2' => $planted_area, // SOMME SUPERFICIES EMBLAVEE SPECULATION 
				);
	return $data;
}

/*
*I8 - (%) ACROISSEMENT CHIFFRE D'AFFAIRE PAR HECTARE POUR LE RIZ
*/
function ca_per_ha_for_rice($collect){
	$total_selled_amount = 0;
	$planted_area = 0;	
	set_child($collect, 'speculation');
	$speculations = $collect['speculation'];
	foreach($speculations as $speculation){
		if($speculation['speculation'] == "RIZ"){
			$total_selled_amount += speculation_total_selled_amount($speculation);
			$planted_area += $speculation['planted_area'];	
		}
	}
	return array(
				'value1' => $total_selled_amount,
				'value2' => $planted_area, 
				);
}

/*
*I9 - (%) ACROISSEMENT CHIFFRE D'AFFAIRE PAR HECTARE POUR L'HORTICULTURE
*/
function ca_per_ha_for_horticulture($collect){
	$total_selled_amount = 0;
	$planted_area = 0;	
	set_child($collect, 'speculation');
	$speculations = $collect['speculation'];
	foreach($speculations as $speculation){
		if($speculation['speculation'] != "RIZ"){
			$total_selled_amount += speculation_total_selled_amount($speculation);
			$planted_area += $speculation['planted_area'];	
		}
	}
	return array(
				'value1' => $total_selled_amount,
				'value2' => $planted_area,
				);
}

/*
*I10 - (%) REVENUE PAR HECTARE POUR LE RIZ
*/
function revenu_per_ha_for_rice($collect){
	$revenue = 0;
	$planted_area = 0;	
	set_child($collect, 'speculation');
	$speculations = $collect['speculation'];
	foreach($speculations as $speculation){
		if($speculation['speculation'] == "RIZ"){
			$revenue += speculation_revenue($collect, $speculation);
			$planted_area += $speculation['planted_area'];	
		}
	}
	$data = array(
				'value1' => $revenue,
				'value2' => $planted_area,
				);			
	return $data;
}

/*
*I11 - (%) REVENUE  PAR HECTARE POUR L'HORTICULTURE
*/
function revenu_per_ha_for_horticulture($collect){//TOTAL REVENUE
	$revenue = 0;
	$planted_area = 0;	
	set_child($collect, 'speculation');
	$speculations = $collect['speculation'];
	foreach($speculations as $speculation){
		if($speculation['speculation'] != "RIZ"){
			$revenue += speculation_revenue($collect, $speculation);
			$planted_area += $speculation['planted_area'];	
		}
	}
	$data = array(
				'value1' => $revenue,
				'value2' => $planted_area,
				);
				
	return $data;
}

/*
*I12 - (%) POURCENTAGE DE PRODUCTEURS APPLIQUANT LES BONNES PRATIQUES
*/
function used_good_practises_percentage($collect){
	return array( 
			'value1' => $collect['used_good_practises'] ? 1 : 0,
			'value2' => 1,
			);
}

/*
*I13 - Taux d'evolution de la penetration de l'agriculture contractuelle sur le volume de production commercialise
*/
function contractual_agriculture_evolution_rate($collect){
	$qte_sc = 0;
	$harvest_quantity = 0;	
	set_child($collect, 'speculation');
	$speculations = $collect['speculation'];
	foreach($speculations as $speculation){
		$qte_sc += $speculation['quantity_selled_with_contract'];
		$harvest_quantity += $speculation['harvest_quantity'];	
	}
	$data = array(
				'value1' => $qte_sc,
				'value2' => $harvest_quantity,
				);
				
	return $data;	
}

/*
*I14 - NOMBRE DE MPME CREES OU STABILISEES PAR LE PARERBA
*/
function mpmes($collect){
	return 1;
}

/*
*I15-1 - NOMBRE D'EXPLOITANTS AYANT ACCES AU SERVICES FINANCIERS
*/
function credit_access_exp($collect){
	$credit_access = getTrueOrFalse($collect['credit_request']);
	return ($credit_access) ? 1 : 0;
}

/*
*I15-2 - NOMBRE DE MPME AYANT ACCES AU SERVICES FINANCIERS
*/
function credit_access_mpme($collect){
	$credit_access = getTrueOrFalse($collect['credit_request']);
	return ($credit_access) ? 1 : 0;
}

/*
*I16 - % AUGMENTATION DU CHIFFRE D'AFFAIRES DES MPME ACCELEREES
*/
function mpme_ca_increase($collect){//((ca t1 - cat0) / t0) * 100
	return array( 
			'value1' => $collect['ca'],
			'value2' => $collect['ca_before_pareba'],
			);
}

/*
*I17 - % MARGE BENEFICIAIRE DES PME ACCELEREES
*/
function mpme_earnings($collect){//revenue net / ca * 100
	return array( 
			'value1' => $collect['net_revenues'], //Verifier Si contractuel (1 ou 0)
			'value2' => $collect['ca'],
			);
}

/*
*I18 - NOMBRE D'EMPLOIS POUR LES JEUNES CREES PAR LES MPME ACCELEREES
*/
function total_created_job_young($collect){//jeunes >= 500000
	return young_employee_count($collect);
}

/*
*I19 - NOMBRE DE JEUNES FORNES PAR LE PROJETET ACTIFSS DANS LES FILIERES AGROALIMENTAIRES
*/
function total_trained_young($collect){
	return trained_young_total($collect);
}

/*
* NOMBRE DE PRODUITS DE CAPITALISATION REALISES
function capitalization_product($collect){
	return 1;
}
* NIVEAU DE NOTORIETE

function notoriety($collect){
	return 1;
}*/

/*
*UTILITAIRES 
*/
function getTrueOrFalse($value){
	return ($value == 1) ? "true" : (($value == 0) ? "false" : "-" );
}

function percent($numerateur, $diviseur){
	if($diviseur == 0 && $numerateur == 0){//Si diviseur 0, et numerateur = 0 => retourne "N/A"
		return "N/A";
	}else if($diviseur == 0 ){//diviseur = 0 => retourne "100"
		return 100;
	}else{
		return round(($numerateur * 100 / $diviseur),2);
	}
}

function divide($numerateur, $diviseur){
	if($diviseur == 0){//Si diviseur 0 
		return "N/A";
	}else{
		return round(($numerateur / $diviseur),2);
	}
}

function serialize_indicators($indicators, $campaign_id){
	global $serialized_indicators_path;

	$path = $serialized_indicators_path."_".$campaign_id.".gen";

	$serialized_indicators = serialize($indicators);
	$fp = fopen($path, 'w');
	fwrite($fp, $serialized_indicators);
	fclose($fp);
}

function unserialize_indicators($campaign_id){
	global $serialized_indicators_path;
	
	$path = $serialized_indicators_path."_".$campaign_id.".gen";

	$fp = fopen($path, 'r');
	$s_indicators = fread($fp,filesize($path));
	$indicators = unserialize($s_indicators);
	return $indicators;
}

/*
*GENERATE INDICATORS
*/
$campaign_id = isset($_SESSION['campaign']) ? $_SESSION['campaign']['id'] : -1;
$_campaign_id = _extract1("campaign_id");
if(!empty($_campaign_id)){
	$campaign_id = $_campaign_id;
}

$campaign_to_generate = null;
foreach($campaigns as $campaign){
	if($campaign_id == $campaign['id']){
		$campaign_to_generate = $campaign;
	}
}

$reload = _extract1("reload");
if(!empty($reload)){
	$path = $serialized_indicators_path."_".$campaign_id.".gen";
	if(file_exists($path)){
		unlink($path);
		header("Location: controller.php");
	}
}

//HANDLE INDICATORS EXPORT REQUEST
$type = _extract1('export');
if(!empty($type)){
	$type_var = $type."s";
	$type_values = $$type_var;
	$csv_data = export_indicator($type,$type_values, $campaign_id);

	//Retour des donnees.
	header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename="'.$type."_indicators.csv".'"');
	header('Content-Disposition: inline; filename="'.$type."_indicators.csv".'"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	//header('Content-Length: ' . strlen($csv_data));
	ob_clean();
	echo trim($csv_data);
    exit;
}else{
	generate($campaign_to_generate);
}

function export_indicator($type,$type_values, $campaign_id){
	global $indicators_keys;
	
	$indicators = unserialize_indicators($campaign_id);

	$header = "";
	foreach($type_values as $type_value){
		$header .= ";Description;".str_replace(";","",$type_value['name']);
	}
	$header .= "\n";
	$csv_data = $header;
	foreach ($indicators_keys as $indicator_key) {
		$csv_data .= $indicators[$indicator_key]['description2'];
		foreach($type_values as $type_value){
			$indicator_value = $indicators[$indicator_key]['data'][$type][$type_value['name']] ?? "-";
			$indicator_prefix = $indicators[$indicator_key]['prefix'] ?? "";
			$indicator_prefix = (strpos($indicator_value,"N/A") === false) ? $indicator_prefix : "";
			
			$csv_data .= ";".str_replace(";","",$indicator_value.$indicator_prefix) ;
		}
		$csv_data .= "\n";
	}

	return $csv_data;
}