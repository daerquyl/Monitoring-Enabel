<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/db.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/entityManager.php");


/*
* RETOURNE LA CAMPAGNE SPECIFIE PAR SON ID
*/
function findCampaign($id){
	$query = "SELECT * FROM campaign WHERE id = ".$id;
	$campaigns = getEntityQueryBase($query);
	$campaign = ( $campaigns != null && count($campaigns)>0) ? $campaigns[0] : null;
	return $campaign;
}

/*
* RETOURNE LA CAMPAGNE ACTIVE
*/
function findActiveCampaign(){
	$query = "SELECT * FROM campaign WHERE status in ('ONGOING', 'EXTENDED') order by id desc limit 1";
	$campaigns = getEntityQueryBase($query);
	$campaign = ( $campaigns != null && count($campaigns)>0) ? $campaigns[0] : null;
	return $campaign;
}

/*
* RETOURNE LES CAMPAGNES FERMES
*/
function findClosedCampaign(){
	$query = "SELECT * FROM campaign WHERE status = 'CLOSED'";
	$campaigns = getEntityQueryBase($query);
	return $campaigns;
}

/*
* RETOURNE TOUTES LES CAMPAGNES
*/
function findAllCampaigns(){
	$query = "SELECT * FROM campaign ORDER BY id DESC";
	$campaigns = getEntityQueryBase($query);
	return $campaigns;
}
