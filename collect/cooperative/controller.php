<?php

/*
* GESTIONNAIRE POUR PARAMETRAGE AVANT SAUVEGARDE
*/
function cooperative_ctrl_pre_save(&$collect){
	$collect['water_total_cost'] = $collect['water_cost_m3'] * $collect['water_quantity'];
	$collect['maintenance_cost'] = $collect['grill_maintenance_cost'] + $collect['hole_maintenance_cost'] 
									+ $collect['basin_maintenance_cost'] + $collect['solar_maintenance_cost'] 
									+ $collect['tank_maintenance_cost'] + $collect['generator_maintenance_cost']
									+ $collect['building_maintenance_cost'] + $collect['agriculture_equipment_maintenance_cost'] 
									+ $collect['animal_maintenance_cost'] + $collect['irrigation_network_cost']
									+ ($collect['other_maintenance_cost']  ?? 0);	
									
	//Is adult
	$collect['is_adult'] = $collect['age'] >= 35;

}