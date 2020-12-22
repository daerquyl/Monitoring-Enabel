<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/db.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/entityManager.php");

/*
* CREE OU MET A JOUR UN LIEU DANS LA BDD
* $location : array - Lieu
*/
function _save($location){
	if($location['type'] == "REGION") return saveRegion($location);
	if($location['type'] == "DEPARTMENT") return saveDepartment($location);
	if($location['type'] == "COMMUNE") return saveCommune($location);
	return false;
}

/*
* CREE OU MET A JOUR UNE REGION DANS LA BDD
* $region : array - Region
*/
function saveRegion($region){
	$result = save($region, "region", ["id","name"]);
	return $result;
}

/*
* CREE OU MET A JOUR UN DEPARTEMENT DANS LA BDD
* $department : array - Department
*/
function saveDepartment($department){
	return save($department, "department", ["id","name","region_id"]);
}

/*
* CREE OU MET A JOUR UNE COMMUNE DANS LA BDD
* $commune : array - Commune
*/
function saveCommune($commune){
//	setSuperiors($commune);
	return save($commune, "commune", ["id","name","department_id"]);
}

/*
* GERE LA HIERACHIE DES LIEUX

function setSuperiors(&$location){
	$type = $location['type'];
	if($type == "COMMUNE"){
		$department =  find($location['department_id'], "department");
		$location['region_id'] = $department['region_id'];
	}
}*/

/*
* LISTE TOUTES LES LIEUX D'UN TYPE ( REGION / DEPARTEMENT / COMMUNE)
*/
function findAll($table){
	$query = "SELECT a.*, '".strtoupper($table)."' as type FROM ".strtolower($table)." a ORDER BY name ASC";
	return getEntityQueryBase($query);
}

/*
* LISTE TOUTES LES LIEUX 
*/
function findAllLocations(){
	$locations = array_merge(
					findAll("REGION"),
					findAll("DEPARTMENT"),
					findAll("COMMUNE")
				);
	return $locations;
}

/*
* RETOURNE LE LIEU SPECIFIE PAR SON ID ET SON TYPE
*/
function find($id, $table){
	$query = "SELECT a.*, '".strtoupper($table)."' as type FROM ".strtolower($table)." a WHERE id = ".$id;
	$locations = getEntityQueryBase($query);
	$location = ($locations != null && count($locations)>0) ? $locations[0] : null;
	if($location != null){
		$location['type'] = $table;
	}
	return $location;
}

/*
* SUPPRIME UN LIEU
*/
function __delete($id, $type){
	if($type == "REGION") return _delete($id, "region");
	if($type == "DEPARTMENT") return _delete($id, "department");
	if($type == "COMMUNE") return _delete($id, "commune");
}

/*
* RETOURNES LES TYPES
*/
function getTypes(){
	return ["REGION","DEPARTMENT","COMMUNE"];
}

/*
* DECRIT LE TYPE DE LIEU
*/
function getTypeDescription($role){
	if($role == "REGION") return "REGION";
	if($role == "DEPARTMENT") return "DEPARTMENT";
	if($role == "COMMUNE") return "COMMUNE";
	
	return "REGION";
}

/*
* RETOURNE POUR UN TYPE DE LIEU LES TYPES RELIES
*/
function getSuperiorTypes($type){
	if($type == "COMMUNE") return "DEPARTMENT";
	if($type == "DEPARTMENT") return "REGION";
	return "";
}

