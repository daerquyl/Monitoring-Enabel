<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/db.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/entityManager.php");

/*
* CREE OU MET A JOUR UNE ORGANISATION DANS LA BDD
* $org : array - Organisation
*/
function _save($org){
	return save($org, "organization", ["id","name","logo","description"]);
}

/*
* LISTE TOUTES LES ORGANISATIONS
*/
function findAll(){
	$query = "SELECT * FROM organization ORDER BY name ASC";
	return getEntityQueryBase($query);
}

/*
* RETOURNE L'ORGANISATION SPECIFIE PAR SON ID
*/
function find($id){
	$query = "SELECT * FROM organization WHERE id = ".$id;
	$organizations = getEntityQueryBase($query);
	$organization = ( $organizations != null && count($organizations)>0) ? $organizations[0] : null;
	return $organization;
}

/*
* SUPPRIME UNE ORGANISATION
*/
function __delete($id){
	return _delete($id, "organization");
}

