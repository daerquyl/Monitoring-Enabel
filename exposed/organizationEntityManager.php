<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/db.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/entityManager.php");


/*
* LISTE TOUTES LES ORGANISATIONS
*/
function findAllOrganizations(){
	$query = "SELECT id,name FROM organization ORDER BY name ASC";
	return getEntityQueryBase($query);
}