<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/db.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/entityManager.php");

/*
* LISTE TOUTES LES LIEUX D'UN TYPE ( REGION / DEPARTEMENT / COMMUNE)
*/
function findAllLocations($table){
	$query = "SELECT a.*, '".strtoupper($table)."' as type FROM ".strtolower($table)." a ORDER BY name ASC";
	return getEntityQueryBase($query);
}

/*
* LISTE LES REGIONS
*/
function getRegions(){
	return findAllLocations("REGION");
}

/*
* LISTE LES DEPARTEMENTS
*/
function getDepartments(){
	return findAllLocations("DEPARTMENT");
}

/*
* LISTE LES COMMUNES
*/
function getCommunes(){
	return findAllLocations("COMMUNE");
}
