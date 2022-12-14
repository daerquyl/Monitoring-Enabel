<script>
$(document).ready(function(){
	//Script pour mettre a jour les valeurs actuelles de la collecte dans le formulaire
	$(".record-card #id").val('<?= $collect['id'] ?>').trigger("change");
	$(".record-card #site_id").val('<?= $collect['site_id'] ?>').trigger("change");
	$('.record-card #village').val('<?= $collect['village'] ?>');
	
	$('.record-card #irrigation_type').val('<?= $collect['irrigation_type'] ?>').trigger("change");
	$('.record-card #other_irrigation_type').val('<?= $collect['other_irrigation_type'] ?>');
	$('.record-card #holes').val('<?= $collect['holes'] ?>');
	$('.record-card #forages').val('<?= $collect['forages'] ?>');
	$('.record-card #basins').val('<?= $collect['basins'] ?>');
	$('.record-card #taps').val('<?= $collect['taps'] ?>');
	$('.record-card #waterMoyDeep').val('<?= $collect['water_moy_deep'] ?>');
	$('.record-card #waterDebit').val('<?= $collect['water_debit'] ?>');
	$('.record-card #motoPumps').val('<?= $collect['moto_pumps'] ?>');
	$('.record-card #solarPumps').val('<?= $collect['solar_pumps'] ?>');
	$('.record-card #energyType').val('<?= $collect['energy_type'] ?>');
	$('.record-card #energyPowerKW').val('<?= $collect['energy_powerkw'] ?>');
	$('.record-card #energyPowerKVA').val('<?= $collect['energy_powerkva'] ?>');
	$('.record-card #lengthPiping').val('<?= $collect['length_piping'] ?>');
	$('.record-card #lengthFences').val('<?= $collect['length_fences'] ?>');
	$('.record-card #length_hedges').val('<?= $collect['length_hedges'] ?>');
	$('.record-card #totalHaIrrigated').val('<?= $collect['total_ha_irrigated'] ?>');
	$('.record-card #plots').val('<?= $collect['plots'] ?>');
	$('.record-card #plotMoyArea').val('<?= $collect['plot_moy_area'] ?>');

	$('.record-card #reporting_period').val('<?= $collect['reporting_period'] ?>');
	$('.record-card #totalHa').val('<?= $collect['total_ha'] ?>');
	$('.record-card #totalHaLegallySecured').val('<?= $collect['total_ha_legally_secured'] ?>');
	$('.record-card #total_ha_fenced').val('<?= $collect['total_ha_fenced'] ?>');
	$('.record-card #total_ha_running_men_lt35').val('<?= $collect['total_ha_running_men_lt35'] ?>');
	$('.record-card #total_ha_running_pvh_men_lt35').val('<?= $collect['total_ha_running_pvh_men_lt35'] ?>');
	$('.record-card #total_ha_running_mr_men_lt35').val('<?= $collect['total_ha_running_mr_men_lt35'] ?>');
	$('.record-card #total_ha_running_men_gt35').val('<?= $collect['total_ha_running_men_gt35'] ?>');
	$('.record-card #total_ha_running_pvh_men_gt35').val('<?= $collect['total_ha_running_pvh_men_gt35'] ?>');
	$('.record-card #total_ha_running_mr_men_gt35').val('<?= $collect['total_ha_running_mr_men_gt35'] ?>');
	$('.record-card #total_ha_running_women_lt35').val('<?= $collect['total_ha_running_women_lt35'] ?>');
	$('.record-card #total_ha_running_pvh_women_lt35').val('<?= $collect['total_ha_running_pvh_women_lt35'] ?>');
	$('.record-card #total_ha_running_mr_women_lt35').val('<?= $collect['total_ha_running_mr_women_lt35'] ?>');
	$('.record-card #total_ha_running_women_gt35').val('<?= $collect['total_ha_running_women_gt35'] ?>');
	$('.record-card #total_ha_running_pvh_women_gt35').val('<?= $collect['total_ha_running_pvh_women_gt35'] ?>');
	$('.record-card #total_ha_running_mr_women_gt35').val('<?= $collect['total_ha_running_mr_women_gt35'] ?>');
	
	$('.record-card #menWorkersLt35').val('<?= $collect['men_workers_lt35'] ?>');
	$('.record-card #menWorkersGt35').val('<?= $collect['men_workers_gt35'] ?>');
	$('.record-card #womenWorkersLt35').val('<?= $collect['women_workers_lt35'] ?>');
	$('.record-card #womenWorkersGt35').val('<?= $collect['women_workers_gt35'] ?>');
	$('.record-card #migrantMenWorkersLt35').val('<?= $collect['migrant_men_workers_lt35'] ?>');
	$('.record-card #migrantMenWorkersGt35').val('<?= $collect['migrant_men_workers_gt35'] ?>');
	$('.record-card #migrantWomenWorkersLt35').val('<?= $collect['migrant_women_workers_lt35'] ?>');
	$('.record-card #migrantWomenWorkersGt35').val('<?= $collect['migrant_women_workers_gt35'] ?>');
	$('.record-card #handicapMenWorkersLt35').val('<?= $collect['handicap_men_workers_lt35'] ?>');
	$('.record-card #handicapMenWorkersGt35').val('<?= $collect['handicap_men_workers_gt35'] ?>');
	$('.record-card #handicapWomenWorkersLt35').val('<?= $collect['handicap_women_workers_lt35'] ?>');
	$('.record-card #handicapWomenWorkersGt35').val('<?= $collect['handicap_women_workers_gt35'] ?>');
	
	$('.record-card #functionalSheds').val('<?= $collect['functional_sheds'] ?>');
	$('.record-card #nonFunctionalSheds').val('<?= $collect['non_functional_sheds'] ?>');
	$('.record-card #functionalOffices').val('<?= $collect['functional_offices'] ?>');
	$('.record-card #nonFunctionalOffices').val('<?= $collect['non_functional_offices'] ?>');
	$('.record-card #functionalDeposits').val('<?= $collect['functional_deposits'] ?>');
	$('.record-card #nonFunctionalDeposits').val('<?= $collect['non_functional_deposits'] ?>');
	$('.record-card #functionalLocals').val('<?= $collect['functional_locals'] ?>');
	$('.record-card #nonFunctionalLocals').val('<?= $collect['non_functional_locals'] ?>');
	$('.record-card #functionalColdRooms').val('<?= $collect['functional_cold_rooms'] ?>');
	$('.record-card #nonFunctionalColdRooms').val('<?= $collect['non_functional_cold_rooms'] ?>');
	$('.record-card #functionalHuskers').val('<?= $collect['functional_huskers'] ?>');
	$('.record-card #nonFunctionalHuskers').val('<?= $collect['non_functional_huskers'] ?>');
	$('.record-card #functionalTractors').val('<?= $collect['functional_tractors'] ?>');
	$('.record-card #nonFunctionalTractors').val('<?= $collect['non_functional_tractors'] ?>');
	$('.record-card #functionalHarvesters').val('<?= $collect['functional_harvesters'] ?>');
	$('.record-card #nonFunctionalHarvesters').val('<?= $collect['non_functional_harvesters'] ?>');
	$('.record-card #functionalRicemils').val('<?= $collect['functional_ricemils'] ?>');
	$('.record-card #nonFunctionalRicemils').val('<?= $collect['non_functional_ricemils'] ?>');
	$('.record-card #functional_power_generator').val('<?= $collect['functional_power_generator'] ?>');
	$('.record-card #non_functional_power_generator').val('<?= $collect['non_functional_power_generator'] ?>');
	$('.record-card #functional_power_solar').val('<?= $collect['functional_power_solar'] ?>');
	$('.record-card #non_functional_power_solar').val('<?= $collect['non_functional_power_solar'] ?>');
	$('.record-card #functional_power_senelec').val('<?= $collect['functional_power_senelec'] ?>');
	$('.record-card #non_functional_power_senelec').val('<?= $collect['non_functional_power_senelec'] ?>');
	$('.record-card #functional_forage').val('<?= $collect['functional_forage'] ?>');
	$('.record-card #non_functional_forage').val('<?= $collect['non_functional_forage'] ?>');
	$('.record-card #functional_pump').val('<?= $collect['functional_pump'] ?>');
	$('.record-card #non_functional_pump').val('<?= $collect['non_functional_pump'] ?>');
	$('.record-card #functional_hole').val('<?= $collect['functional_hole'] ?>');
	$('.record-card #non_functional_hole').val('<?= $collect['non_functional_hole'] ?>');
	$('.record-card #functional_water_monitor').val('<?= $collect['functional_water_monitor'] ?>');
	$('.record-card #non_functional_water_monitor').val('<?= $collect['non_functional_water_monitor'] ?>');
	$('.record-card #functional_tank').val('<?= $collect['functional_tank'] ?>');
	$('.record-card #non_functional_tank').val('<?= $collect['non_functional_tank'] ?>');
	$('.record-card #functional_cloture').val('<?= $collect['functional_cloture'] ?>');
	$('.record-card #non_functional_cloture').val('<?= $collect['non_functional_cloture'] ?>');

	$('.record-card #grillMaintenanceCost').val('<?= $collect['grill_maintenance_cost'] ?>');
	$('.record-card #basinMaintenanceCost').val('<?= $collect['basin_maintenance_cost'] ?>');
	$('.record-card #solarMaintenanceCost').val('<?= $collect['solar_maintenance_cost'] ?>');
	$('.record-card #generatorMaintenanceCost').val('<?= $collect['generator_maintenance_cost'] ?>');
	$('.record-card #holeMaintenanceCost').val('<?= $collect['hole_maintenance_cost'] ?>');
	$('.record-card #tankMaintenanceCost').val('<?= $collect['tank_maintenance_cost'] ?>');
	$('.record-card #plumbingMaintenanceCost').val('<?= $collect['plumbing_maintenance_cost'] ?>');
	$('.record-card #building_maintenance_cost').val('<?= $collect['building_maintenance_cost'] ?>');
	$('.record-card #agriculture_equipment_maintenance_cost').val('<?= $collect['agriculture_equipment_maintenance_cost'] ?>');
	$('.record-card #animal_maintenance_cost').val('<?= $collect['animal_maintenance_cost'] ?>');
	$('.record-card #forageMaintenanceCost').val('<?= $collect['forage_maintenance_cost'] ?>');
	$('.record-card #otherMaintenanceCost').val('<?= $collect['other_maintenance_cost'] ?>');
	$('.record-card #otherMaintenanceCostDescription').val('<?= $collect['other_maintenance_cost_description'] ?>');
});
</script>