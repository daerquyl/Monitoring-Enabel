<?php

/*
* GESTIONNAIRE POUR PARAMETRAGE AVANT SAUVEGARDE
*/
function perimeter_ctrl_pre_save(&$collect){
					
	$collect['maintenance_cost'] = 	$collect['grill_maintenance_cost'] + $collect['basin_maintenance_cost'] +
									$collect['solar_maintenance_cost'] + $collect['generator_maintenance_cost'] +
									$collect['hole_maintenance_cost'] + $collect['tank_maintenance_cost'] +
									$collect['plumbing_maintenance_cost'] + $collect['forage_maintenance_cost'] +
									$collect['building_maintenance_cost'] + $collect['agriculture_equipment_maintenance_cost'] + 
									$collect['animal_maintenance_cost'] + ($collect['other_maintenance_cost'] ?? 0);
									
	$collect['total_ha_running'] = 	$collect['total_ha_running_men_lt35'] + $collect['total_ha_running_men_gt35'] +
									$collect['total_ha_running_women_lt35'] + $collect['total_ha_running_women_gt35'];
									//$collect['total_ha_running_mr_men_lt35'] + $collect['total_ha_running_mr_men_gt35'] +
									//$collect['total_ha_running_mr_women_lt35'] + $collect['total_ha_running_mr_women_gt35'] +
									//$collect['total_ha_running_pvh_men_lt35'] + $collect['total_ha_running_pvh_men_gt35'] +
									//$collect['total_ha_running_pvh_women_lt35'] + $collect['total_ha_running_pvh_women_gt35'];
}
											 											
