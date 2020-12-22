<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/db.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/entityManager.php");

/*
* CREE OU MET A JOUR UNE SITE DANS LA BDD
* $site : array - Site
*/
function _save($site,$fields){
	return save($site, "site", $fields);
}

/*
* LISTE TOUTES LES SITES
*/
function findAll($role, $organization_id){
	if($role=="ADMIN"){ return findAllForAdmin(); }
	else{ return findAllForOrganization($organization_id); }
	
}

/*
* LISTE TOUTES LES SITES POUR L'ADMINISTRATEUR
*/
function findAllForAdmin(){
	$query = "SELECT s.*, c.name as commune, d.name as department, r.name as region 
				FROM site s, commune c, department d, region r
				WHERE s.commune_id = c.id AND s.department_id = d.id AND s.region_id = r.id 
				ORDER BY name ASC";
	return getEntityQueryBase($query);
}

/*
* LISTE TOUTES LES SITES POUR L'ORGANIZATION DE L'UTILISATEUR
*/
function findAllForOrganization($organization_id){
	$query = "SELECT s.*, c.name as commune, d.name as department, r.name as region 
				FROM site s, commune c, department d, region r
				WHERE s.commune_id = c.id 
				AND s.department_id = d.id 
				AND s.region_id = r.id 
				AND s.organization_id = ".$organization_id."
				ORDER BY name ASC";
	return getEntityQueryBase($query);
}

/*
* RETOURNE L'SITE SPECIFIE PAR SON ID
*/
function find($id){
	$query = "SELECT s.*, c.name as commune, d.name as department, r.name as region 
				FROM site s, commune c, department d, region r
				WHERE s.commune_id = c.id AND s.department_id = d.id AND s.region_id = r.id AND s.id = ".$id;
	$sites = getEntityQueryBase($query);
	$site = ( $sites != null && count($sites)>0) ? $sites[0] : null;
	return $site;
}

/*
* SUPPRIME UNE SITE
*/
function __delete($id){
	return _delete($id, "site");
}

