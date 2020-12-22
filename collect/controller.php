<?php
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/guard.php");

require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/flash_message_handler.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/form_binding_utils.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/utils.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/exposed/siteEntityManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/exposed/locationEntityManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/exposed/userEntityManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/exposed/campaignEntityManager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/collect/commons/form_effect_utils.php");
require_once("fields.php");
require_once("fields_fr.php");
require_once("collectEntityManager.php");
/*
* CHAMPS & ATTRIBUTS
*/
$fields;
$fields_fr;
$collectType = isset($_REQUEST['record']) ? strtolower($_REQUEST['record']) : "perimeter";

if(file_exists($collectType."/controller.php")){
	require_once($collectType."/controller.php");
}
if(file_exists($collectType."/entityManager.php")){
	require_once($collectType."/entityManager.php");
}
/*
*ROUTEUR INTERNE APPELLE LA FONCTION ADEQUATE EN FONCTION DE L'ULR
*/
function serveRequest(){
	global $collectType, $fields, $fields_fr, 
	$fields_perimeter, $fields_enterprise, $fields_exploitation, $fields_cooperative,
	$fields_fr_perimeter, $fields_fr_enterprise, $fields_fr_exploitation, $fields_fr_cooperative;
	
	$fieldvar = 'fields_'.$collectType;
	$fieldfrvar = 'fields_fr_'.$collectType;
	$fields = $$fieldvar;
	$fields_fr = $$fieldfrvar;
	$redirectInfo = isset($_REQUEST['path']) ? strtoupper($_REQUEST['path']) : "LIST";

	if($redirectInfo == "ADDORUPDATE"){ addOrUpdate(); }
	if($redirectInfo == "LIST"){ _list(); }		
	if($redirectInfo == "REGIONAL_LIST"){ listForRegion(); }	
	if($redirectInfo == "DETAILS"){ details(); }
	if($redirectInfo == "REGIONAL_DETAILS"){ detailsForRegion(); }	
	if($redirectInfo == "REGIONAL_COMPLETE_DETAILS"){ completeDetailsForRegion(); }	
	if($redirectInfo == "DELETE"){	___delete(); }
	if($redirectInfo == "GET"){	__getJson(); }
	if($redirectInfo == "SUBMIT"){	transition("SUBMIT"); }
	if($redirectInfo == "REJECT"){	transition("REJECT"); }
	if($redirectInfo == "VALIDATE"){ transition("VALIDATE"); }
	if($redirectInfo == "CONFIRM"){	transitionByRegion("CONFIRM"); }
	if($redirectInfo == "SEND"){	transitionByRegion("SEND"); }
	if($redirectInfo == "EXPORT"){	export(); }
}

/*
*
*/
function getCollectTypeDescription(){
	global $collectType;
	if($collectType == "perimeter") return "P&eacute;rim&egrave;tre irrigu&eacute;";
	if($collectType == "exploitation") return "Exploitation agricole";
	if($collectType == "enterprise") return "Entreprise";
	if($collectType == "cooperative") return "Organisations d'usagers des p&eacute;rim&egrave;tres irrigu&eacute;s";
}

/*
* GESTIONNAIRE POUR L'AJOUT OU LA MISE A JOUR D'UNE PERIMETRE
*/
function addOrUpdate(){
	global $fields, $collectType, $principal;
	$collect = _extract($fields);
	if(!isset($collect['id'])){
		$collect['campaign_id'] = $_SESSION['campaign']['id'];
		$collect['creator_id'] = $principal['id'];
		$collect['date_creation'] = date('Y-m-d'); 
		$collect['status'] = "CREATED"; 
	}
	$preSaveControllerFunction = $collectType."_ctrl_pre_save";
	if(function_exists($preSaveControllerFunction)){
		$preSaveControllerFunction($collect);
	}
	setMessage(_save($collect,$collectType,$fields),
				"D&eacute;sol&eacute;, une erreur est survenue pendant la mise &agrave; jour de la fiche",
				"La fiche a &eacute;t&eacute; bien enregistr&eacute;e");
	header("Location: controller?path=list&record=".$collectType);
}

/*
* GESTIONNAIRE POUR AFFICHER LA LISTE DES COLLECTES
*/
function _list(){
	global $collectType, $principal, $current_page_base;
	$groupCollects = ($principal['role'] == "ADMIN");		
	require_once("commons/views/list.php");
}

/*
* GESTIONNAIRE POUR AFFICHER LA LISTE DES COLLECTES PAR REGION
*/
function listForRegion(){
	global $collectType, $principal, $current_page_base;
	$action = ($principal['role'] == "MANAGER") ? "send" : "confirm";
	$groupCollects = ($principal['role'] == "ADMIN");		
	require_once("commons/views/regional_list.php");
}

/*
* GESTIONNAIRE POUR AFFICHER LA PAGE DETAILS
*/
function details(){
	global $collectType, $principal;
	$id = _extract1("id");
	$collect = find($id, $collectType);
	$rejects = getRejects($collectType.$collect['id']);
	$creator = findUser($collect['creator_id']);

	require_once("commons/views/details.php");
}

/*
* GESTIONNAIRE POUR AFFICHER LA PAGE DETAILS POUR LA REGION
*/
function detailsForRegion(){
	global $collectType, $principal;
	$campaign_id = isset($_SESSION['campaign']) ? $_SESSION['campaign']['id'] : -1;
	$region = _extract1("region");
	$action = ($principal['role'] == "MANAGER") ? "send" : "confirm"; 
	$collects = findByRegion($region, $collectType, $principal['role'], $principal['id'], $campaign_id);
	$creator = findUser($collects[0]['creator_id']);
	
	require_once("commons/views/regional_details.php");
}

/*
* GESTIONNAIRE POUR AFFICHER LA PAGE DE DETAILS COMPLET POUR LA REGION
*/
function completeDetailsForRegion(){
	global $collectType, $principal;
	$campaign_id = isset($_SESSION['campaign']) ? $_SESSION['campaign']['id'] : -1;
	$region = _extract1("region");
	$collects = findAllByRegion($region, $collectType, $principal['role'], $principal['id'], $campaign_id);

	require_once("commons/views/regional_complete_details.php");
}

/*
* GESTIONNAIRE POUR TRANSITIONNER UNE COLLECTE
*/
function transition($action){
	global $collectType, $principal;
	$id = _extract1("id");
	$collect = find($id, $collectType);
	if($action == "VALIDATE"){
		$collect['validator_id'] = $principal['id'];
		$collect['date_validation'] = date('Y-m-d');
	}
	if($action == "REJECT"){
		$reason = _extract1("reason");
		$reject = array(
			"reason" => $reason,
			"creator_id" => $principal['id'],
			"creator_name" => $principal['name'],
			"date_creation" => date('Y-m-d H:i:s'),
			"collect_id" => $collectType.$collect['id']
		);
		saveRejectReason($reject);
	}
	setMessage(updateStatus($collect,$action,$collectType),
				"D&eacute;sol&eacute;, une erreur est survenue pendant la transition de la fiche",
				"La transition a &eacute;t&eacute; bien ex&eacute;cut&eacute;e");
	header("Location: controller?path=details&id=".$id."&record=".$collectType);
}

/*
* GESTIONNAIRE POUR TRANSITIONNER EN MASSE UNE COLLECTE par region
*/
function transitionByRegion($action){
	global $collectType, $principal;
	$campaign_id = isset($_SESSION['campaign']) ? $_SESSION['campaign']['id'] : -1;
	$region = _extract1("region");
	$current_status = ($principal['role'] == "MANAGER")? 'CONFIRMED' : 'VALIDATED';
	setMessage(updateStatusByRegion($region,$action,$current_status,$collectType,$campaign_id),
				"D&eacute;sol&eacute;, une erreur est survenue pendant la transition en lot des fiches",
				"La transition a &eacute;t&eacute; bien ex&eacute;cut&eacute;ee");
	header("Location: controller?path=regional_list&record=".$collectType);
}

/*
* GESTIONNAIRE POUR LA SUPPRESSION D'UN PERIMETRE
*/
function ___delete(){
	global $collectType;
	$id = _extract1("id");
	setMessage(__delete($id, $collectType),
				"D&eacute;sol&eacute;, une erreur est survenue pendant la supression de la fiche",
				"La fiche a &eacute;t&eacute; bien supprim&eacute;e");
	header("Location: controller?path=list&record=".$collectType);
}

/*
* VERIFIE SI L'UTILISATEUR PEUT REALISER UNE ACTION SUR LA COLLECTE (CREATION, MODIFICATION, VALIDATION, ETC)
*/
function canDoAction(){
	return isset($_SESSION['campaign']) && !empty($_SESSION['campaign']);
}

/*
* VERIFIE SI L'UTILISATEUR PEUT CREER UN NOUVEAU ELEMENT
*/
function canCreate(){
	global $principal;
	return canDoAction() && in_array($principal['role'],["FACILITATOR"]);
}

/*
* VERIFIE SI LA FICHE PEUT ETRE CONFIRME
*/
function canBeConfirmed($collects, $creator){
	global $principal;
	if(!canDoAction()) return false;
	if(count($collects) <= 0) return false;
	if(!in_array($principal['role'],["DEPUTY"])) return false;
	if(($creator['deputy_id'] == $principal['id'])) return true;
	return false;
}

/*
* VERIFIE SI LA FICHE PEUT ETRE ENVOYE AU PAREBA
*/
function canBeSent($collects, $creator){
	global $principal;
	if(!canDoAction()) return false;
	if(count($collects) <= 0) return false;
	if(!in_array($principal['role'],["MANAGER"])) return false;
	if(($creator['manager_id'] == $principal['id'])) return true;
	return false;
}

/*
* VERIFIE SI LA FICHE PEUT ETRE MODIFIEE
*/
function canBeModified($status, $creator){
	global $principal;
	if(!canDoAction()) return false;
	if(($status == "CREATED" || $status == "REJECTED") && ($creator['id'] == $principal['id'])) return true;
	/*if(($status == "WAITING_VALIDATION") && ($creator['supervisor_id'] == $principal['id'])) return true;*/
	return false;
}

/*
* VERIFIE SI LA FICHE PEUT ETRE SUPPRIMEE
*/
function canBeDeleted($status, $creator){
	global $principal;
	if(!canDoAction()) return false;
	if(($status == "CREATED" || $status == "REJECTED") && ($creator['id'] == $principal['id'])) return true;
	return false;
}

/*
* VERIFIE SI LA FICHE PEUT ETRE SOUMISE
*/
function canBeSubmitted($status, $creator){
	global $principal;
	if(!canDoAction()) return false;
	if(($status == "CREATED" || $status == "REJECTED") && ($creator['id'] == $principal['id'])) return true;
	return false;
}

/*
* VERIFIE SI LA FICHE PEUT ETRE VALIDEE
*/
function canBeValidated($status, $creator){
	global $principal;
	if(!canDoAction()) return false;
	if(($status == "WAITING_VALIDATION") && ($creator['supervisor_id'] == $principal['id'])) return true;
	return false;
}

/*
* VERIFIE SI LA FICHE PEUT ETRE VALIDEE
*/
function canBeRejected($status, $creator){
	global $principal;
	if(!canDoAction()) return false;
	if(($status == "WAITING_VALIDATION") && ($creator['supervisor_id'] == $principal['id'])) return true;
	if(($status == "VALIDATED") && ($creator['deputy_id'] == $principal['id'])) return true;
	if(($status == "CONFIRMED") && ($creator['manager_id'] == $principal['id'])) return true;
	return false;
}

/*
* COMPTE TOUTES LES COLLECTES POUR UN UTILISATEUR ET UN STATUT DONNE
*/
function getCountForStatus($status){
	global $collectType, $principal;
	$campaign_id = isset($_SESSION['campaign']) ? $_SESSION['campaign']['id'] : -1;
	return countByStatus($status,$collectType,$principal['role'], $principal['id'], $campaign_id);
}

/*
* COMPTE TOUTES LES COLLECTES POUR UNE ONG
*/
function getCountForOng($organization_id){
	global $collectType, $principal;
	$campaign_id = isset($_SESSION['campaign']) ? $_SESSION['campaign']['id'] : -1;
	return countByOng($organization_id, $collectType, $campaign_id);
}

/*
* COMPTE TOUTES LES COLLECTES PAR REGION
*/
function statsByRegion($collectType){
	global $collectType, $principal;
	$campaign_id = isset($_SESSION['campaign']) ? $_SESSION['campaign']['id'] : -1;
	$resultats = array();
	$resultats_brut = countGroupByRegion($collectType,$principal['role'], $principal['id'], $campaign_id);
	foreach($resultats_brut as $resb){
		if(!array_key_exists($resb['region_id'],$resultats)){
			$resultats[$resb['region_id']] = array(
			'region_id' => $resb['region_id'],
			'region' => $resb['region'],
			'CREATED' => 0,
			'WAITING_VALIDATION' => 0,
			'VALIDATED' => 0,
			'CONFIRMED' => 0,
			'SENT' => 0,
			'REJECTED' => 0,
			'NONE' => 0
			);
		}
		$resultats[$resb['region_id']][$resb['status']] = $resb['total'];
	}
	return $resultats;
}

/*
* COMPTE TOUTES LES COLLECTES PAR ONG
*/
function statsByOng($collectType){
	global $collectType, $principal;
	$campaign_id = isset($_SESSION['campaign']) ? $_SESSION['campaign']['id'] : -1;
	$data = array();
	$regions = array();
	$organizations = array();
	$resultats_brut = countGroupByOng($collectType, $campaign_id);
	foreach($resultats_brut as $resb){
		if(!array_key_exists($resb['organization_id'],$data)){
			$data[$resb['organization_id']] = array(
			'organization_id' => $resb['organization_id'],
			'organization' => $resb['organization'],
			'regions' => array()
			);
		}

		$regions[$resb['region_id']] = $resb['region'];
		$organizations[$resb['organization_id']] = $resb['organization'];
		$data[$resb['organization_id']]['regions'][$resb['region_id']] = array(
																"region_id" => $resb['region_id'],
																"total" => $resb['total'],
																"region" => $resb['region']
															);
															
	}
	$regions = array_unique($regions);
	$organizations = array_unique($organizations);
	$resultats = array(
	'data' => $data,
	'regions' => $regions,
	'organizations' => $organizations
	);
	return $resultats;
}

/*
* LISTE TOUTES LES COLLECTES POUR UN UTILISATEUR / ROLE DONNEE
*/
function getAll(){
	global $collectType, $principal;
	$campaign_id = isset($_SESSION['campaign']) ? $_SESSION['campaign']['id'] : -1;
	return findAll($collectType, $principal['role'], $principal['id'], $campaign_id);
}

/*
* EXPORTE EN CSV LES COLLECTES
*/
function export(){
	global $collectType, $principal;
	$campaign_id = isset($_SESSION['campaign']) ? $_SESSION['campaign']['id'] : -1;
	$_campaign_id = _extract1("campaign_id");
	if(!empty($_campaign_id)){
		$campaign_id = $_campaign_id;
	}
	exportData($collectType, $principal['role'], $principal['organization_id'], $principal['id'], $campaign_id);
}

//Serve Request
serveRequest();