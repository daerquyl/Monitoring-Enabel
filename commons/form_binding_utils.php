<?php

/*
* SECURISE LES SAISIES UTILISATEURS AVEC HTMLENTITIES
*/
function _htmlentities($elements){
	if(is_array($elements)){
		foreach($elements as &$element){
			if(is_array($element)){
				foreach($element as &$elmt){
					$elmt = htmlspecialchars($elmt);
				}
			}else{
				$element = htmlspecialchars($element);
			}
		}
	}else{
		$elements = htmlspecialchars($elements);
	}
	return $elements;
}

/* 
* EXTRAIT UNE ENTITE SUR LA BASE DES DONNES DE FORMULAIRE 
*/
function _extract($allowed){
	//$allowed  = ['foo', 'bar'];
	$filtered_array =  array_filter(
						$_REQUEST,
						function ($key) use ($allowed) {
							return 
							(($key != "id") && in_array($key, $allowed)) // Dans les champs valides sauf id
							||
							((($key == "id" && !empty(trim($_REQUEST[$key])))) && in_array($key, $allowed));//Ou id dans les champs vaides mais non vide
						},
						ARRAY_FILTER_USE_KEY
					);
	return _htmlentities($filtered_array);
}

/* 
* EXTRAIT UN CHAMP DE LA REQUETE HTTP
*/
function _extract1($field){
	$value = isset($_REQUEST[$field]) ? $_REQUEST[$field] : "";
	return _htmlentities($value);
}