<?php
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/guard.php");


require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/flash_message_handler.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/form_binding_utils.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/utils.php");
require_once("campaignEntityManager.php");

/*
* CHAMPS & ATTRIBUTS
*/
$fields = ["id","title","start_date","end_date","status","creator_id"];

/*
*ROUTEUR INTERNE APPELLE LA FONCTION ADEQUATE EN FONCTION DE L'ULR
*/
function serveRequest(){
	
	$redirectInfo = isset($_REQUEST['path']) ? strtoupper($_REQUEST['path']) : "LIST";
	
	if($redirectInfo == "ADDORUPDATE"){ addOrUpdate(); }
	if($redirectInfo == "LIST"){ _list(); }
	if($redirectInfo == "DELETE"){	___delete(); }
	if($redirectInfo == "GET"){	__getJson(); }
	if($redirectInfo == "CLOSE"){ close(); }
	if($redirectInfo == "START"){ start(); }
	if($redirectInfo == "EXTEND"){ extend(); }
}

/*
* GESTIONNAIRE POUR L'AJOUT OU LA MISE A JOUR D'UNE CAMPAGNE
*/
function addOrUpdate(){
	global $fields;
	$campaign = _extract($fields);
	$create = canBeCreatedInCalendar($campaign) ;
	$update = canBeUpdatedInCalendar($campaign);
	if($update || $create){
		$campaign['status'] = "PENDING";
		if($create) {	
			$campaign['creator_id'] = 1;
		}
		setMessage(_save($campaign),
					"D&eacute;sol&eacute;, une erreur est survenue pendant la mise &agrave; jour de la campagne",
					"La campagne a &eacute;t&eacute; bien enregistr&eacute;");
	}else{
		setMessage(false,
					"D&eacute;sol&eacute;, une campagne a dej&agrave; &eacute;t&eacute; planifi&eacute; sur cette date",
					"La campagne a &eacute;t&eacute; bien enregistr&eacute;");
	}
	header("Location: controller?path=list");
}

/*
* GESTIONNAIRE POUR AFFICHER LA LISTE DES CAMPAGNES
*/
function _list(){
	require_once("views/list.php");
}

/*
* GESTIONNAIRE POUR LA SUPPRESSION D'UNE CAMPAGNE
*/
function ___delete(){
	$id = _extract1("id");
	$campaign = find($id);
	if(canBeDeleted($campaign['status'])){
		setMessage(__delete($id),
					"D&eacute;sol&eacute;, une erreur est survenue pendant la supression de la campagne",
					"La campagne a &eacute;t&eacute; bien supprim&eacute;");
	}
	header("Location: controller?path=list");
}

/*
* GESTIONNAIRE POUR LE DEMARRAGE D'UNE CAMPAGNE
*/
function start(){
	$id = _extract1("id");
	$campaign = find($id);
	if(canBeStarted($campaign['status'])){
		$campaign['status'] = "ONGOING";
		$campaign['start_date'] = date("Y-m-d");
		$done = _save($campaign);
		if($done){
			$_SESSION['campaign'] = $campaign;
		}
		setMessage($done,
					"D&eacute;sol&eacute;, une erreur est survenue pendant le d&eacute;marrage de la campagne",
					"La campagne a &eacute;t&eacute; bien d&eacute;marr&eacute;e;");
	}
	header("Location: controller?path=list");
}

/*
* GESTIONNAIRE POUR LA CLOTURE D'UNE CAMPAGNE
*/
function close(){
	$id = _extract1("id");
	$campaign = find($id);
	if(canBeEnded($campaign['status'])){
		$campaign['status'] = "CLOSED";
		$campaign['end_date'] = date("Y-m-d");
		$done = _save($campaign);
		if($done){
			unset($_SESSION['campaign']);
		}
		setMessage($done,
					"D&eacute;sol&eacute;, une erreur est survenue pendant la fermerture la campagne",
					"La campagne a &eacute;t&eacute; bien ferm&eacute;e;");
	}
	header("Location: controller?path=list");
}

/*
* GESTIONNAIRE POUR L'EXTENSION D'UNE CAMPAGNE
*/
function extend(){
	global $fields;
	$campaign = _extract($fields);
	var_dump($campaign);
	if(canBeExtendedInCalendar($campaign)){
		$campaign['status'] = "EXTENDED";
		$done = _save($campaign);
		if($done){
			$_SESSION['campaign'] = $campaign;
		}
		setMessage($done,
					"D&eacute;sol&eacute;, une erreur est survenue pendant la prolongation la campagne",
					"La campagne a &eacute;t&eacute; bien prolong&eacute;e;");
	}
	header("Location: controller?path=list");
}

/*
* GESTIONNAIRE POUR LA RECUPERATION D'UNE CAMPAGNE (JSON)
*/
function __getJson(){
	$id = _extract1("id");
	$campaign = find($id);
	$response = '{ "status" : '.(($campaign != null) ? 200 : 404).' %campaign }';
	$response = ($campaign == null) ? str_replace("%organisation","", $response) 
										: str_replace("%campaign",',"campaign" : '.json_encode(strip_invalid_utf8_array($campaign)), $response);
	
	header("Content-Type: application/json; charset=UTF-8");
	echo $response;	
}

/*
* VERIFIE SI LA CAMPAGNE NE CHEVAUCHE AVEC AUCUNE AUTRE CAMPAGNE
*/
function checkDates($start_date, $end_date, $id=null){
	$campaigns = findByDates($start_date,$end_date,$id);
	if($campaigns!=null && count($campaigns) != 0) return false;
	return true;
}

/*
* VERIFIE S'IL EST POSSIBLE DE CREER UNE CAMPAGNE
*/
function canBeCreated(){
	$campaigns = findByStatuses(["ONGOING","EXPIRED"]);
	if($campaigns!=null && count($campaigns) != 0) return false;//SI AUCUNE AUTRE CAMPAGNE N'EST EN COURS
	return true;
}

/*
* VERIFIE SI UNE CAMPAGNE PEUT ETRE CREE
*/
function canBeCreatedInCalendar($campaign){
	return !isset($campaign['id']) && canBeCreated() && checkDates($campaign['start_date'],$campaign['end_date']);
}

/*
* VERIFIE SI lA CAMPAGNE PEUT ETRE DEMARRE
*/
function canBeStarted($status){
	if($status == "PENDING") return true;
	return false;
}

/*
* VERIFIE SI lA CAMPAGNE PEUT ETRE ARRETE
*/
function canBeEnded($status){
	if($status == "ONGOING" || $status=="EXTENDED") return true;
	return false;
}

/*
* VERIFIE SI lA CAMPAGNE PEUT ETRE SUPPRIME
*/
function canBeDeleted($status){
	if($status == "PENDING") return true;
	return false;
}


/*
* VERIFIE SI lA CAMPAGNE PEUT ETRE MISE A JOUR
*/
function canBeUpdated($status){
	if($status == "PENDING") return true;
	return false;
}

/*
* VERIFIE SI UNE CAMPAGNE PEUT ETRE MISE A JOUR DANS LE CALENDRIER
*/
function canBeUpdatedInCalendar($campaign){
	if(!isset($campaign['id'])) return false;
	$_campaign = find($campaign['id']);
	return canBeUpdated($_campaign['status']) && checkDates($_campaign['start_date'],$_campaign['end_date'],$_campaign['id']);
}

/*
* VERIFIE SI lA CAMPAGNE PEUT ETRE ETENDU
*/
function canBeExtended($status){
	$campaigns = findByStatuses(["ONGOING","EXPIRED","TEMPORARY_CLOSED"]);
	if(
		($status == "ONGOING" || $status == "EXPIRED" || $status == "TEMPORARY_CLOSED") && 
		($campaigns!=null && count($campaigns) != 0) //SI AUCUNE CAMPAGNE N'A ENCORE ETE ETENDU
	) return true;
	
	return false;
}

/*
* VERIFIE SI UNE CAMPAGNE PEUT ETRE ETENDU LE CALENDRIER
*/
function canBeExtendedInCalendar($campaign){
	if(!isset($campaign['id'])) return false;
	$_campaign = find($campaign['id']);
	return canBeExtended($_campaign['status']) && checkDates($_campaign['start_date'],$_campaign['end_date'],$_campaign['id']);
}

/*
* RETOURNE LA DESCRIPTION D'UN STATUT
*/
function getStatusDescription($status){
	if($status == "PENDING") return "PLANIFIEE";
	if($status == "ONGOING") return "EN COURS";
	if($status == "EXPIRED") return "EXPIREE";
	if($status == "EXTENDED") return "ETENDUE";
	if($status == "TEMPORARY_CLOSED") return "CLOTUREE";
	if($status == "CLOSED") return "ARCHIVEE";
}


//Serve Request
serveRequest();