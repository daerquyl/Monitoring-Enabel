<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/db.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/entityManager.php");

/*
* LISTE TOUTES LES SITES
*/
function findAllSites($role, $organization_id){
	$query = ($role == 'ADMIN' || $role == 'ENABEL') 
				? "SELECT s.*, c.name as commune, d.name as department, r.name as region 
				FROM site s, commune c, department d, region r
				WHERE s.commune_id = c.id AND s.department_id = d.id AND s.region_id = r.id 
				ORDER BY name ASC"
				: "SELECT s.*, c.name as commune, d.name as department, r.name as region 
				FROM site s, commune c, department d, region r
				WHERE s.commune_id = c.id AND s.department_id = d.id AND s.region_id = r.id 
				AND organization_id = ".$organization_id."
				ORDER BY name ASC";
	return getEntityQueryBase($query);
}


/*
* LISTE LES SITES
*/
function getSites(){
	global $principal;
	$role = $principal['role'];
	$organization_id = $principal['organization_id'];
	return findAllSites($role, $organization_id);
}
