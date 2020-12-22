<?php
/*
* RETOURNE TOUTES LES ENTITES DE LA BDD RESULTANT DE LA REQUETE EN PARAMETRE + LES CRITERES DE BINDING
*/
function getEntities($query, $bindParams){
	//Connexion BDD
	$conn = DBConnexion::getInstance();
	
	//Initial list
	$results = array();
	if(!empty($conn)){
		try{
			// prepare sql and bind parameters
			$stmt = $conn->prepare($query);
			foreach($bindParams as $key => $value){
				$stmt->bindParam(":".$key, $value);
			}			
			$stmt->execute();
			
			// set the resulting array to associative
			$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->debugDumpParams();
			while ($row = $stmt->fetch()){
				$results[] = $row;
			}
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}	
	return $results;
}
/*
* RETOURNE TOUTES LES ENTITES DE LA BDD RESULTANT DE LA REQUETE EN PARAMETRE
*/
function getEntityQueryBase($query){
	//Connexion BDD
	$conn = DBConnexion::getInstance();
	
	//Initial list
	$results = array();
	if(!empty($conn)){
		try{
			// prepare sql and bind parameters
			$stmt = $conn->prepare($query);
			$stmt->execute();
			// set the resulting array to associative
			$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 			
			while ($row = $stmt->fetch()){
				$results[] = $row;
			}
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}	
	return $results;
}

/*
* CREE OU MET A JOUR UNE ENTITE DANS LA BDD
* $entity : array
* $table : Table Mappe a l'entite
* $fields : Champs concernes
*/
function save($entity, $table, $fields, $returnInsertId = false){
//	print_r($entity);
//	echo "<br /><br /><br /><br /><br />";
	//Connexion BDD
	$conn = DBConnexion::getInstance();
	
	//Flag Traitement
	$saved = false;

	//Si connecter
	if(!empty($conn)){

		try{
			// Si Creation nouvel organisation
			$creation = !isset($entity['id']);
			if($creation){
				$query = "INSERT INTO %t (%fn) VALUES (%f)";
			}else{ // Sinon si modification
				$query = "UPDATE %t SET %f WHERE id = :id";
			}
			
			//Mis a jour de la requete avec les champs
			$fieldsStr = "";
			$fieldsNamesStr = "";
			
			foreach($fields as $field)
			{
				if(isset($entity[$field])){
					if($creation){
						$fieldsNamesStr .= ",".$field;
						$fieldsStr .= ",:".$field;
					}else{
						$fieldsStr .= ",".$field."=:".$field;
					}
				}
			}
			$fieldsStr = substr($fieldsStr, 1);
			$fieldsNamesStr = substr($fieldsNamesStr, 1);
			
			if($creation){
				$query = str_replace("%fn",$fieldsNamesStr,$query);
			}
			$query = str_replace("%f",$fieldsStr,$query);
			$query = str_replace("%t",$table,$query);
			
			//Preparation de la requete
			$stmt = $conn->prepare($query);
			//Binding de la requete
			(!$creation) ? $stmt->bindParam(':id', $entity['id']) : "";
			foreach($fields as $field){
				if(isset($entity[$field])){
					if($entity[$field] === "false") $entity[$field] = 0;
					if($entity[$field] === "true") $entity[$field] = 1;
					if($entity[$field] === "-") $entity[$field] = 2;
					if($entity[$field] === "NA") $entity[$field] = 3;
//					var_dump($entity[$field]);
//					if(is_array($entity[$field])) echo $field; var_dump($entity[$field]);;
					$stmt->bindParam(":".$field, $entity[$field]);
				}
			}
			$stmt->execute();
//			$stmt->debugDumpParams();
			//Update Flag Traitement
			$saved = (!$creation)? true : ((!$returnInsertId)? true : $conn->lastInsertId());
			
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	
	return $saved;
}

function _delete($id, $table){
	$conn = DBConnexion::getInstance();
	if(!empty($conn)){
		try{
			$stmt = $conn->prepare("DELETE FROM ".$table." WHERE id = :id");
			$stmt->bindParam(':id', $id);
			$stmt->execute();		
			return true;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	
	return false;
}

function deleteEntityQueryBase($query){
	$conn = DBConnexion::getInstance();
	if(!empty($conn)){
		try{
			$stmt = $conn->prepare($query);
			$stmt->execute();		
			return true;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	return false;
}

function executeEntityQueryBase($query){
	$conn = DBConnexion::getInstance();
	if(!empty($conn)){
		try{
			$stmt = $conn->prepare($query);
			$stmt->execute();		
			return true;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	
	return false;
}