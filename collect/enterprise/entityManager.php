<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/db.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/entityManager.php");

$enterprise_credit_fields  = 
				[
					"credit_id",
					"credit_request_ok",
					"financial_institution",
					"credit_object",
					"credit_amount",
					"credit_rate",
					"credit_duration",
					"credit_repayment_type",
					"credit_repayment_mode",
					"credit_payment_status",
					"collect_id"
				];
					
$enterprise_support_fields  = 
				[
					"support_id",
					"provider",
					"other_provider",
					"other_support","module",
					"categorie","type",
					"men_beneficiary_lt35",
					"men_beneficiary_gt35",
					"women_beneficiary_lt35",
					"women_beneficiary_gt35",
					"mr_men_beneficiary_lt35",
					"mr_men_beneficiary_gt35",
					"mr_women_beneficiary_lt35",
					"mr_women_beneficiary_gt35",
					"pvh_men_beneficiary_lt35",
					"pvh_men_beneficiary_gt35",
					"pvh_women_beneficiary_lt35",
					"pvh_women_beneficiary_gt35",
					"collect_id",
				];

$enterprise_employee_fields  = 
				[
					"employee_id",
					"employee_name",
					"employee_age",
					"employee_sex",
					"employee_mr",
					"employee_mr_local",
					"employee_pvh",
					"employee_trained_by_pareba",
					"relationship_with_manager",
					"employee_status",
					"worked_days",
					"employee_revenue",
					"payment_mode",
					"employee_worked_trimesters",
					"employee_other_worked_trimesters",
					"collect_id",
				];
/*
* PARAMETRE L'ENTITE AVANT SAUVEGARDE
*/
function enterprise_entity_pre_save($collect, &$fields){
	global $enterprise_credit_fields, 
		   $enterprise_support_fields, 
		   $enterprise_employee_fields;
		   
	$fields = array_diff(
						$fields, 
						array_merge(
							$enterprise_credit_fields, 
							$enterprise_support_fields,
							$enterprise_employee_fields
						));
}

/*
* PARAMETRE L'ENTITE APRES SAUVEGARDE ET SAUVEGARDE LES ELEMENTS LIES
*/
function enterprise_entity_post_save($collect){
	$credits = extract_enterprise_child_infos($collect, "enterprise_credit_fields");
	$supports = extract_enterprise_child_infos($collect, "enterprise_support_fields");
	$employees = extract_enterprise_child_infos($collect, "enterprise_employee_fields");
	
	$done_1 = (!getBoolTrueOrFalse($collect['credit_request']))? true : save_enterprise($credits, "credit", "enterprise_credit_fields");
	$done_2 = (!getBoolTrueOrFalse($collect['capacity_building']))? true : save_enterprise($supports, "support", "enterprise_support_fields");
	$done_3 = ($collect['employee_count'] == 0)? true : save_enterprise($employees, "employee", "enterprise_employee_fields");

	return $done_1 && $done_2 && $done_3;
}

/*
* PARAMETRE L'ENTITE APRES RECUPERATION DE L'ENTITE
*/
function enterprise_entity_post_find(&$collect){
	$credit = get_enterprise_child($collect['id'], "credit");
	$support = get_enterprise_child($collect['id'], "support");
	$employee = get_enterprise_child($collect['id'], "employee");

	$collect['credit'] = $collect['support'] = $collect['employee'] = array();
	if($credit != null){
		$collect['credit'] = $credit;
	}
	if($support != null){
		$collect['support'] = $support;
	}
	if($employee != null){
		$collect['employee'] = $employee;
	}
}

/*
* SUPPRIME LES ENTITES LIES APRES SUPPRESSION DE L'ENTITE
*/
function enterprise_entity_post_delete($collect_id){
	$credit = delete_enterprise_child($collect_id, "credit");
	$support = delete_enterprise_child($collect_id, "support");
	$employee = delete_enterprise_child($collect_id, "employee");
}

function save_enterprise($elements, $type, $fields_var){
	global $$fields_var;
	$elements = ($elements != null && count($elements) > 0)? $elements : array();
	$_fields = array_diff($$fields_var, array($type."_id"));
	$done = true;
	foreach($elements as $element){
		if(isset($element[$type."_id"]) && !empty($element[$type."_id"])){
			$element['id'] = $element[$type."_id"];
		}
		$element['collect_id'] = "enterprise".$element['collect_id'];
		$done = $done && save($element, $type, $_fields);
	}
	return $done;
}

function extract_enterprise_child_infos($collect, $fields_var){
	global $$fields_var;
	$allowed = $$fields_var;
	$elements = filterAllowedKeys($allowed, $collect);
	
	$results = array();
	$composed_elements = array();
	foreach($elements as $key => $value){
		if(is_array($value)){
			$composed_elements[$key] = $value;
		}else{
			$results[$key] = $value;
		}
	}
	if(count($composed_elements) > 0){
		$size_results = count($composed_elements[array_key_first($composed_elements)]);
		$_results = array();
		for($i=0; $i<$size_results; $i++){
			$_results[] = $results;
		}
		foreach($composed_elements as $key => $value){
			for($i=0; $i<$size_results; $i++){
				$_results[$i][$key] = $value[$i];
			}
		}
		return $_results;
	}else{
		return array($results);
	}
	
}

function get_enterprise_child($collect_id, $table){
	$query = "SELECT *
				FROM ".$table."
				WHERE collect_id = 'enterprise".$collect_id."'";			
	$elements = getEntityQueryBase($query);
	return $elements;
}

function delete_enterprise_child($collect_id, $table){
	$query = "DELETE 
				FROM ".$table."
				WHERE collect_id = 'enterprise".$collect_id."'";			
	return deleteEntityQueryBase($query);
}



