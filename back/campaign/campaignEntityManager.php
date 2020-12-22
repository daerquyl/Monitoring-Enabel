<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/db.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/entityManager.php");

/*
* CREE OU MET A JOUR UNE CAMPAGNE DANS LA BDD
* $campaign : array - Campaign
*/
function _save($campaign){
	if(isset($campaign['id'])){
		return save($campaign, "campaign", ["title","start_date","end_date","status"]);
	}else{
		return save($campaign, "campaign", ["id","title","start_date","end_date","status","creator_id"]);
	}
}

/*
* LISTE TOUTES LES CAMPAGNES
*/
function findAll(){
	$query = "SELECT * FROM campaign ORDER BY title ASC";
	return getEntityQueryBase($query);
}

/*
* RETOURNE LA CAMPAGNE SPECIFIE PAR SON ID
*/
function find($id){
	$query = "SELECT * FROM campaign WHERE id = ".$id;
	$campaigns = getEntityQueryBase($query);
	$campaign = ( $campaigns != null && count($campaigns)>0) ? $campaigns[0] : null;
	return $campaign;
}

/*
* RETOURNE LES CAMPAGNES DANS UN STATUT DONNE
*/
function findByStatus($status){
	$query = "SELECT * FROM campaign WHERE status = '".$status."'";
	return getEntityQueryBase($query);
}

/*
* RETOURNE LES CAMPAGNES dans un intervalle de date donnee
*/
function findByDates($start, $end, $id=-1){
	$query = "SELECT * FROM campaign 
				WHERE (
						(start_date BETWEEN :start AND :end) 
						OR (end_date BETWEEN :start AND :end) 
						OR (:start BETWEEN start_date AND end_date) 
						OR (:end BETWEEN start_date AND end_date)
					  )
					  AND STATUS in ('PENDING','ONGOING', 'EXTENDED')";
	$params = array(
		"start" => $start,
		"end" => $end
	);
	if($id != null){
		$query = str_replace("%id","AND id != :id",$query);
		$params['id'] = $id;
	}else{
		$query = str_replace("%id","",$query);
	}
	return getEntities($query, $params);
}

/*
* RETOURNE LES CAMPAGNES ayant les statues en parametres
*/
function findByStatuses($statuses){
	$sstatuses = "";
	foreach($statuses as &$status){
		$sstatuses .= ",'".$status."'";
	}
	$query = "SELECT * FROM campaign WHERE status in (".substr($sstatuses,1).")";
	return getEntityQueryBase($query);
}

/*
* SUPPRIME UNE CAMPAGNE
*/
function __delete($id){
	return _delete($id, "campaign");
}

