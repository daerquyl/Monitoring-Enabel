<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/monitoring/collect/commons/other_collect_utils.php');
/*
* GESTIONNAIRE POUR PARAMETRAGE AVANT SAUVEGARDE
*/
function enterprise_ctrl_pre_save(&$collect){
	$collect['shareholders'] = $collect['men_shareholder_lt35'] + $collect['men_shareholder_gt35'] + $collect['women_shareholder_lt35'] + $collect['women_shareholder_gt35']; //+ 

	$total_salary_expenses = $collect['manager_revenue'];
	$employees_revenue = $collect['employee_revenue'];
	if($employees_revenue){
		foreach($employees_revenue as $employee_revenue){
			$total_salary_expenses += $employee_revenue;
		}
	}
	$collect['salary_expenses'] = $total_salary_expenses;

	$collect['incomes'] = $collect['ca'];
	$collect['net_revenues'] = $collect['incomes'] - ($collect['other_expenses'] + $collect['salary_expenses']);
	$collect['net_earnings'] = $collect['net_revenues'] / $collect['incomes']; 
	
	$collect['is_adult'] = ($collect['age']>=35); 
		
/*	$collect['etp_permanent_men_lt35'] = getETP('Journalier', 'H', false, $collect);
	$collect['etp_permanent_men_gt35'] = getETP('Journalier', 'H', true, $collect);
	$collect['etp_permanent_women_lt35'] = getETP('Journalier', 'F', false, $collect);
	$collect['etp_permanent_women_gt35'] = getETP('Journalier', 'F', true, $collect);
	$collect['etp_temporary_men_lt35'] = getETP('Saisonnier', 'H', false, $collect);
	$collect['etp_temporary_men_gt35'] = getETP('Saisonnier', 'H', true, $collect);
	$collect['etp_temporary_women_lt35'] = getETP('Saisonnier', 'F', false, $collect);
	$collect['etp_temporary_women_gt35'] = getETP('Saisonnier', 'F', true, $collect);
*/
}

