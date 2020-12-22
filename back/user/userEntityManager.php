<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/db.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/entityManager.php");

/*
* CREE OU MET A JOUR UN UTILISATEUR DANS LA BDD
* $user : array - Utilisateur
*/
function _save($user){
	setSuperiors($user);
	if(isset($user['id'])){
		$done = save($user, "puser", ["name","login","email","role","organization_id","supervisor_id","deputy_id","manager_id","admin_ong_id"/*,"sites_ids"*/],true);	
	}else{
		$user['password'] = md5("123");
		$user['status'] = "ACTIVE";
		$done = save($user, "puser", ["name","login","password","email","role","organization_id","supervisor_id","deputy_id","manager_id","admin_ong_id"/*,"sites_ids"*/,"status"],true);	
		if($done){	
			$user['id'] = $done;
			setSuperiorsInDb($user);
			$done = _save($user);		
		}		
	}
	
	return $done;
}

/*
* GERE LA HIERACHIE DES UTILISATEUR
*/
function setSuperiors(&$user){
	global $principal;
	$role = $user['role'];
	
	if($role == "FACILITATOR"){
		$supervisor =  find($user['supervisor_id']);
		$user['deputy_id'] = $supervisor['deputy_id'];
		$user['manager_id'] = $supervisor['manager_id'];
		$user['admin_ong_id'] = $supervisor['admin_ong_id'];
		$user['organization_id'] = $supervisor['organization_id'];
	}
	
	if($role == "SUPERVISOR"){
		$deputy =  find($user['deputy_id']);
		$user['manager_id'] = $deputy['manager_id'];
		$user['admin_ong_id'] = $deputy['admin_ong_id'];
		$user['organization_id'] = $deputy['organization_id'];
	}
	
	if($role == "DEPUTY"){
		$manager =  find($user['manager_id']);
		$user['admin_ong_id'] = $manager['admin_ong_id'];
		$user['organization_id'] = $manager['organization_id'];
	}
	
	if($role == "MANAGER"){
		$admin =  find($user['admin_ong_id']);
		$user['admin_ong_id'] = $admin['admin_ong_id'];
		$user['organization_id'] = $admin['organization_id'];
	}

	if($role == "ADMIN" || $role == "ENABEL"){
		$admin = find($principal['id']);  
		$user['organization_id'] = $admin['organization_id'];  
	}
}


/*
* GERE LA HIERACHIE DES UTILISATEURS AYANT DES SUPERIEURS NULL ( EX : SUPERVIVOR NULL POUR UN SUPERVISEUR)
*/
function setSuperiorsInDb(&$user){
	$role = $user['role'];
	
	if($role == "SUPERVISOR"){
		$user['supervisor_id'] = $user['id'];
	}
	
	if($role == "DEPUTY"){
		$user['supervisor_id'] = $user['id'];
		$user['deputy_id'] = $user['id'];
	}
	
	if($role == "MANAGER"){
		$user['supervisor_id'] = $user['id'];
		$user['deputy_id'] = $user['id'];
		$user['manager_id'] = $user['id'];
	}
	
	if($role == "ADMIN_ONG"){
		$user['supervisor_id'] = $user['id'];
		$user['deputy_id'] = $user['id'];
		$user['manager_id'] = $user['id'];
		$user['admin_ong_id'] = $user['id'];
	}
	
	if($role == "ADMIN" || $role == "ENABEL"){
		$user['supervisor_id'] = $user['id'];
		$user['deputy_id'] = $user['id'];
		$user['manager_id'] = $user['id'];
		$user['admin_ong_id'] = $user['id'];
	}
}

/*
* LISTE TOUTES LES UTILISATEURS
*/
function findAll(){
	global $principal;
	if($principal['role'] == "ADMIN"){
		$query = "SELECT u.*, o.name as organization, o.id as organization_id, 
				(SELECT name FROM puser WHERE id = u.supervisor_id) as supervisor, 
				(SELECT id FROM puser WHERE id = u.supervisor_id) as supervisor_id 
				FROM puser u,organization o
				WHERE u.organization_id = o.id 
				AND u.role in ('ADMIN','ADMIN_ONG','ENABEL')
				ORDER BY name ASC ";
	}else{
		$query = "SELECT u.*, o.name as organization, o.id as organization_id, 
				(SELECT name FROM puser WHERE id = u.supervisor_id) as supervisor, 
				(SELECT id FROM puser WHERE id = u.supervisor_id) as supervisor_id 
				FROM puser u,organization o
				WHERE u.organization_id = o.id 
				AND u.organization_id = '".$principal['organization_id']."'
				ORDER BY name ASC ";
	}
	$users = getEntityQueryBase($query);
	if($users != null){
		foreach($users as &$user){
			$user['role_description'] = getRoleDescription($user['role']);
			//$user['status_description'] = getStatusDescription($user['role']);
		}
	}
	return $users;
}

/*
* LISTE LES SUPERVISEURS
*/
function findSuperiors($type, $organization = ""){
	$query = "SELECT id, name 
				FROM puser 
				WHERE ".$type."_id is not null 
				AND role = '".strtoupper($type)."' 
				AND organization_id in (SELECT id FROM organization WHERE name LIKE '%".$organization."%')
				ORDER BY name ASC ";
	$users = getEntityQueryBase($query);
	return $users;
}

/*
* RETOURNE L'UTILISATEUR SPECIFIE PAR SON ID
*/
function find($id){
	$query = "SELECT id, role, name, login, email, organization_id, supervisor_id, deputy_id, manager_id, admin_ong_id FROM puser u WHERE id=".$id;
	$users = getEntityQueryBase($query);
	$user = ( $users != null && count($users)>0) ? $users[0] : null;
	return $user;
}

/*
* SUPPRIME UN UTILISATEUR
*/
function __delete($id){
	return _delete($id, "puser");
}

/*
* REINITIALISE LE MOT DE PASSE D'UN UTILISATEUR
*/
function resetPassword($id){
	$query = "UPDATE puser SET password=md5(123) WHERE id=".$id;
	return executeEntityQueryBase($query);
}

/*
* RETOURNES LES ROLES
*/
function getRoles(){
	return ["FACILITATOR","SUPERVISOR","DEPUTY","MANAGER","ADMIN_ONG","ENABEL","ADMIN"];
}

/*
* DECRIT LE ROLE DE L'UTILISATEUR
*/
function getRoleDescription($role){
	if($role == "FACILITATOR") return "COLLECTEUR";
	if($role == "SUPERVISOR") return "SUPERVISEUR COMMUNAL";
	if($role == "DEPUTY") return "SUPERVISEUR REGIONAL";
	if($role == "MANAGER") return "CHARGE DE SUIVI";
	if($role == "ADMIN_ONG") return "ADMINISTRATEUR ONG";
	if($role == "ENABEL") return "INVITE";
	if($role == "ADMIN") return "ADMINISTRATEUR";
	
	return "COLLECTEUR";
}

/*
* RETOURNE POUR UN ROLE LES ROLES RELIES
*/
function getSuperiorRoles($role){
	if($role == "FACILITATOR") return "SUPERVISOR";
	if($role == "SUPERVISOR") return "DEPUTY";
	if($role == "DEPUTY") return "MANAGER";
	if($role == "MANAGER") return "ADMIN_ONG";
	if($role == "ADMIN_ONG") return "ORGANIZATION";	
	return "";
}

