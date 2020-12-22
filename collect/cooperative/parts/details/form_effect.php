<script>
$(document).ready(function(){
	//Script pour mettre a jour les valeurs actuelles de la $collecte dans le formulaire
	$('.record-card #id').val("<?= $collect['id'] ?>").trigger("change");
	$('.record-card #collect_id').val("<?= $collect['id'] ?>").trigger("change");
	$('.record-card #site_id').val("<?= $collect['site_id'] ?>").trigger("change");
	$('.record-card #polarized_villages').val("<?= $collect['polarized_villages'] ?>").trigger("change");

	$('.record-card #name').val("<?= $collect['name'] ?>").trigger("change");
	$('.record-card #created').val("<?= $collect['created'] ?>").trigger("change");
	$('.record-card #legal_status').val("<?= $collect['legal_status'] ?>").trigger("change");
	$('.record-card #social_part_amount').val("<?= $collect['social_part_amount'] ?>").trigger("change");
	$('.record-card #adhesion_amount').val("<?= $collect['adhesion_amount'] ?>").trigger("change");
	$('.record-card #capital').val("<?= $collect['capital'] ?>").trigger("change");	
	$('.record-card #status_approval_date').val("<?= $collect['status_approval_date'] ?>").trigger("change");
	$('.record-card #agreement_date').val("<?= $collect['agreement_date'] ?>").trigger("change");
	$('.record-card #agreement_number').val("<?= $collect['agreement_number'] ?>").trigger("change");
	$('.record-card #legal_approval_date').val("<?= $collect['legal_approval_date'] ?>").trigger("change");
	$('.record-card #legal_number').val("<?= $collect['legal_number'] ?>").trigger("change");
	$('.record-card #has_manager').val("<?= getTrueOrFalse($collect['has_manager']) ?>").trigger("change");
	$('.record-card #manager_name').val("<?= $collect['manager_name'] ?>").trigger("change");
	$('.record-card #manager_address').val("<?= $collect['manager_address'] ?>").trigger("change");
	$('.record-card #age').val("<?= $collect['age'] ?>").trigger("change");
	$('.record-card #isAdulte').val("<?= getTrueOrFalse($collect['manager_sex']) ?>").trigger("change");
	$('.record-card #manager_sex').val("<?= $collect['manager_sex'] ?>").trigger("change");
	$('.record-card #manager_nid').val("<?= $collect['manager_nid'] ?>").trigger("change");
	$('.record-card #manager_phone').val("<?= $collect['manager_phone'] ?>").trigger("change");
	$('.record-card #mr').val("<?= getTrueOrFalse($collect['mr']) ?>").trigger("change");
	$('.record-card #pvh').val("<?= getTrueOrFalse($collect['pvh']) ?>").trigger("change");
	$('.record-card #trained_by_pareba').val("<?= getTrueOrFalse($collect['trained_by_pareba']) ?>").trigger("change");
	$('.record-card #manager_revenue').val("<?= $collect['manager_revenue'] ?>").trigger("change");
	$('.record-card #worked_campaigns').val("<?= $collect['worked_campaigns'] ?>").trigger("change");

	$('.record-card #men_member_lt35').val("<?= $collect['men_member_lt35'] ?>").trigger("change");
	$('.record-card #men_member_gt35').val("<?= $collect['men_member_gt35'] ?>").trigger("change");
	$('.record-card #women_member_lt35').val("<?= $collect['women_member_lt35'] ?>").trigger("change");
	$('.record-card #women_member_gt35').val("<?= $collect['women_member_gt35'] ?>").trigger("change");
	$('.record-card #mr_men_member_lt35').val("<?= $collect['mr_men_member_lt35'] ?>").trigger("change");
	$('.record-card #mr_men_member_gt35').val("<?= $collect['mr_men_member_gt35'] ?>").trigger("change");
	$('.record-card #mr_women_member_lt35').val("<?= $collect['mr_women_member_lt35'] ?>").trigger("change");
	$('.record-card #mr_women_member_gt35').val("<?= $collect['mr_women_member_gt35'] ?>").trigger("change");
	$('.record-card #pvh_men_member_lt35').val("<?= $collect['pvh_men_member_lt35'] ?>").trigger("change");
	$('.record-card #pvh_men_member_gt35').val("<?= $collect['pvh_men_member_gt35'] ?>").trigger("change");
	$('.record-card #pvh_women_member_lt35').val("<?= $collect['pvh_women_member_lt35'] ?>").trigger("change");
	$('.record-card #pvh_women_member_gt35').val("<?= $collect['pvh_women_member_gt35'] ?>").trigger("change");
	$('.record-card #ca_men_member_lt35').val("<?= $collect['ca_men_member_lt35'] ?>").trigger("change");
	$('.record-card #ca_men_member_gt35').val("<?= $collect['ca_men_member_gt35'] ?>").trigger("change");
	$('.record-card #ca_women_member_lt35').val("<?= $collect['ca_women_member_lt35'] ?>").trigger("change");
	$('.record-card #ca_women_member_gt35').val("<?= $collect['ca_women_member_gt35'] ?>").trigger("change");
	$('.record-card #ca_mr_men_member_lt35').val("<?= $collect['ca_mr_men_member_lt35'] ?>").trigger("change");
	$('.record-card #ca_mr_men_member_gt35').val("<?= $collect['ca_mr_men_member_gt35'] ?>").trigger("change");
	$('.record-card #ca_mr_women_member_lt35').val("<?= $collect['ca_mr_women_member_lt35'] ?>").trigger("change");
	$('.record-card #ca_mr_women_member_gt35').val("<?= $collect['ca_mr_women_member_gt35'] ?>").trigger("change");
	$('.record-card #ca_pvh_men_member_lt35').val("<?= $collect['ca_pvh_men_member_lt35'] ?>").trigger("change");
	$('.record-card #ca_pvh_men_member_gt35').val("<?= $collect['ca_pvh_men_member_gt35'] ?>").trigger("change");
	$('.record-card #ca_pvh_women_member_lt35').val("<?= $collect['ca_pvh_women_member_lt35'] ?>").trigger("change");
	$('.record-card #ca_pvh_women_member_gt35').val("<?= $collect['ca_pvh_women_member_gt35'] ?>").trigger("change");

	$('.record-card #cs_men_member_lt35').val("<?= $collect['cs_men_member_lt35'] ?>").trigger("change");
	$('.record-card #cs_men_member_gt35').val("<?= $collect['cs_men_member_gt35'] ?>").trigger("change");
	$('.record-card #cs_women_member_lt35').val("<?= $collect['cs_women_member_lt35'] ?>").trigger("change");
	$('.record-card #cs_women_member_gt35').val("<?= $collect['cs_women_member_gt35'] ?>").trigger("change");
	$('.record-card #cs_mr_men_member_lt35').val("<?= $collect['cs_mr_men_member_lt35'] ?>").trigger("change");
	$('.record-card #cs_mr_men_member_gt35').val("<?= $collect['cs_mr_men_member_gt35'] ?>").trigger("change");
	$('.record-card #cs_mr_women_member_lt35').val("<?= $collect['cs_mr_women_member_lt35'] ?>").trigger("change");
	$('.record-card #cs_mr_women_member_gt35').val("<?= $collect['cs_mr_women_member_gt35'] ?>").trigger("change");
	$('.record-card #cs_pvh_men_member_lt35').val("<?= $collect['cs_pvh_men_member_lt35'] ?>").trigger("change");
	$('.record-card #cs_pvh_men_member_gt35').val("<?= $collect['cs_pvh_men_member_gt35'] ?>").trigger("change");
	$('.record-card #cs_pvh_women_member_lt35').val("<?= $collect['cs_pvh_women_member_lt35'] ?>").trigger("change");
	$('.record-card #cs_pvh_women_member_gt35').val("<?= $collect['cs_pvh_women_member_gt35'] ?>").trigger("change");
	$('.record-card #be_men_member_lt35').val("<?= $collect['be_men_member_lt35'] ?>").trigger("change");
	$('.record-card #be_men_member_gt35').val("<?= $collect['be_men_member_gt35'] ?>").trigger("change");
	$('.record-card #be_women_member_lt35').val("<?= $collect['be_women_member_lt35'] ?>").trigger("change");
	$('.record-card #be_women_member_gt35').val("<?= $collect['be_women_member_gt35'] ?>").trigger("change");
	$('.record-card #be_mr_men_member_lt35').val("<?= $collect['be_mr_men_member_lt35'] ?>").trigger("change");
	$('.record-card #be_mr_men_member_gt35').val("<?= $collect['be_mr_men_member_gt35'] ?>").trigger("change");
	$('.record-card #be_mr_women_member_lt35').val("<?= $collect['be_mr_women_member_lt35'] ?>").trigger("change");
	$('.record-card #be_mr_women_member_gt35').val("<?= $collect['be_mr_women_member_gt35'] ?>").trigger("change");
	$('.record-card #be_pvh_men_member_lt35').val("<?= $collect['be_pvh_men_member_lt35'] ?>").trigger("change");
	$('.record-card #be_pvh_men_member_gt35').val("<?= $collect['be_pvh_men_member_gt35'] ?>").trigger("change");
	$('.record-card #be_pvh_women_member_lt35').val("<?= $collect['be_pvh_women_member_lt35'] ?>").trigger("change");
	$('.record-card #be_pvh_women_member_gt35').val("<?= $collect['be_pvh_women_member_gt35'] ?>").trigger("change");

	$('.record-card #csp_men_member_lt35').val("<?= $collect['csp_men_member_lt35'] ?>").trigger("change");
	$('.record-card #csp_men_member_gt35').val("<?= $collect['csp_men_member_gt35'] ?>").trigger("change");
	$('.record-card #csp_women_member_lt35').val("<?= $collect['csp_women_member_lt35'] ?>").trigger("change");
	$('.record-card #csp_women_member_gt35').val("<?= $collect['csp_women_member_gt35'] ?>").trigger("change");
	$('.record-card #csp_mr_men_member_lt35').val("<?= $collect['csp_mr_men_member_lt35'] ?>").trigger("change");
	$('.record-card #csp_mr_men_member_gt35').val("<?= $collect['csp_mr_men_member_gt35'] ?>").trigger("change");
	$('.record-card #csp_mr_women_member_lt35').val("<?= $collect['csp_mr_women_member_lt35'] ?>").trigger("change");
	$('.record-card #csp_mr_women_member_gt35').val("<?= $collect['csp_mr_women_member_gt35'] ?>").trigger("change");
	$('.record-card #csp_pvh_men_member_lt35').val("<?= $collect['csp_pvh_men_member_lt35'] ?>").trigger("change");
	$('.record-card #csp_pvh_men_member_gt35').val("<?= $collect['csp_pvh_men_member_gt35'] ?>").trigger("change");
	$('.record-card #csp_pvh_women_member_lt35').val("<?= $collect['csp_pvh_women_member_lt35'] ?>").trigger("change");
	$('.record-card #csp_pvh_women_member_gt35').val("<?= $collect['csp_pvh_women_member_gt35'] ?>").trigger("change");
	$('.record-card #cd_men_member_lt35').val("<?= $collect['cd_men_member_lt35'] ?>").trigger("change");
	$('.record-card #cd_men_member_gt35').val("<?= $collect['cd_men_member_gt35'] ?>").trigger("change");
	$('.record-card #cd_women_member_lt35').val("<?= $collect['cd_women_member_lt35'] ?>").trigger("change");
	$('.record-card #cd_women_member_gt35').val("<?= $collect['cd_women_member_gt35'] ?>").trigger("change");
	$('.record-card #cd_mr_men_member_lt35').val("<?= $collect['cd_mr_men_member_lt35'] ?>").trigger("change");
	$('.record-card #cd_mr_men_member_gt35').val("<?= $collect['cd_mr_men_member_gt35'] ?>").trigger("change");
	$('.record-card #cd_mr_women_member_lt35').val("<?= $collect['cd_mr_women_member_lt35'] ?>").trigger("change");
	$('.record-card #cd_mr_women_member_gt35').val("<?= $collect['cd_mr_women_member_gt35'] ?>").trigger("change");
	$('.record-card #cd_pvh_men_member_lt35').val("<?= $collect['cd_pvh_men_member_lt35'] ?>").trigger("change");
	$('.record-card #cd_pvh_men_member_gt35').val("<?= $collect['cd_pvh_men_member_gt35'] ?>").trigger("change");
	$('.record-card #cd_pvh_women_member_lt35').val("<?= $collect['cd_pvh_women_member_lt35'] ?>").trigger("change");
	$('.record-card #cd_pvh_women_member_gt35').val("<?= $collect['cd_pvh_women_member_gt35'] ?>").trigger("change");

	$('.record-card #expected_ag').val("<?= $collect['expected_ag'] ?>").trigger("change");
	$('.record-card #real_ag').val("<?= $collect['real_ag'] ?>").trigger("change");
	$('.record-card #pv_ag').val("<?= $collect['pv_ag'] ?>").trigger("change");
	$('.record-card #ag_men_participant_lt35').val("<?= $collect['ag_men_participant_lt35'] ?>").trigger("change");
	$('.record-card #ag_men_participant_gt35').val("<?= $collect['ag_men_participant_gt35'] ?>").trigger("change");
	$('.record-card #ag_women_participant_lt35').val("<?= $collect['ag_women_participant_lt35'] ?>").trigger("change");
	$('.record-card #ag_women_participant_gt35').val("<?= $collect['ag_women_participant_gt35'] ?>").trigger("change");
	$('.record-card #ag_mr_men_participant_lt35').val("<?= $collect['ag_mr_men_participant_lt35'] ?>").trigger("change");
	$('.record-card #ag_mr_men_participant_gt35').val("<?= $collect['ag_mr_men_participant_gt35'] ?>").trigger("change");
	$('.record-card #ag_mr_women_participant_lt35').val("<?= $collect['ag_mr_women_participant_lt35'] ?>").trigger("change");
	$('.record-card #ag_mr_women_participant_gt35').val("<?= $collect['ag_mr_women_participant_gt35'] ?>").trigger("change");
	$('.record-card #ag_pvh_men_participant_lt35').val("<?= $collect['ag_pvh_men_participant_lt35'] ?>").trigger("change");
	$('.record-card #ag_pvh_men_participant_gt35').val("<?= $collect['ag_pvh_men_participant_gt35'] ?>").trigger("change");
	$('.record-card #ag_pvh_women_participant_lt35').val("<?= $collect['ag_pvh_women_participant_lt35'] ?>").trigger("change");
	$('.record-card #ag_pvh_women_participant_gt35').val("<?= $collect['ag_pvh_women_participant_gt35'] ?>").trigger("change");
	$('.record-card #expected_ca').val("<?= $collect['expected_ca'] ?>").trigger("change");
	$('.record-card #real_ca').val("<?= $collect['real_ca'] ?>").trigger("change");
	$('.record-card #pv_ca').val("<?= $collect['pv_ca'] ?>").trigger("change");
	$('.record-card #ca_men_participant_lt35').val("<?= $collect['ca_men_participant_lt35'] ?>").trigger("change");
	$('.record-card #ca_men_participant_gt35').val("<?= $collect['ca_men_participant_gt35'] ?>").trigger("change");
	$('.record-card #ca_women_participant_lt35').val("<?= $collect['ca_women_participant_lt35'] ?>").trigger("change");
	$('.record-card #ca_women_participant_gt35').val("<?= $collect['ca_women_participant_gt35'] ?>").trigger("change");
	$('.record-card #ca_mr_men_participant_lt35').val("<?= $collect['ca_mr_men_participant_lt35'] ?>").trigger("change");
	$('.record-card #ca_mr_men_participant_gt35').val("<?= $collect['ca_mr_men_participant_gt35'] ?>").trigger("change");
	$('.record-card #ca_mr_women_participant_lt35').val("<?= $collect['ca_mr_women_participant_lt35'] ?>").trigger("change");
	$('.record-card #ca_mr_women_participant_gt35').val("<?= $collect['ca_mr_women_participant_gt35'] ?>").trigger("change");
	$('.record-card #ca_pvh_men_participant_lt35').val("<?= $collect['ca_pvh_men_participant_lt35'] ?>").trigger("change");
	$('.record-card #ca_pvh_men_participant_gt35').val("<?= $collect['ca_pvh_men_participant_gt35'] ?>").trigger("change");
	$('.record-card #ca_pvh_women_participant_lt35').val("<?= $collect['ca_pvh_women_participant_lt35'] ?>").trigger("change");
	$('.record-card #ca_pvh_women_participant_gt35').val("<?= $collect['ca_pvh_women_participant_gt35'] ?>").trigger("change");

	$('.record-card #expected_cs').val("<?= $collect['expected_cs'] ?>").trigger("change");
	$('.record-card #real_cs').val("<?= $collect['real_cs'] ?>").trigger("change");
	$('.record-card #pv_cs').val("<?= $collect['pv_cs'] ?>").trigger("change");
	$('.record-card #cs_men_participant_lt35').val("<?= $collect['cs_men_participant_lt35'] ?>").trigger("change");
	$('.record-card #cs_men_participant_gt35').val("<?= $collect['cs_men_participant_gt35'] ?>").trigger("change");
	$('.record-card #cs_women_participant_lt35').val("<?= $collect['cs_women_participant_lt35'] ?>").trigger("change");
	$('.record-card #cs_women_participant_gt35').val("<?= $collect['cs_women_participant_gt35'] ?>").trigger("change");
	$('.record-card #cs_mr_men_participant_lt35').val("<?= $collect['cs_mr_men_participant_lt35'] ?>").trigger("change");
	$('.record-card #cs_mr_men_participant_gt35').val("<?= $collect['cs_mr_men_participant_gt35'] ?>").trigger("change");
	$('.record-card #cs_mr_women_participant_lt35').val("<?= $collect['cs_mr_women_participant_lt35'] ?>").trigger("change");
	$('.record-card #cs_mr_women_participant_gt35').val("<?= $collect['cs_mr_women_participant_gt35'] ?>").trigger("change");
	$('.record-card #cs_pvh_men_participant_lt35').val("<?= $collect['cs_pvh_men_participant_lt35'] ?>").trigger("change");
	$('.record-card #cs_pvh_men_participant_gt35').val("<?= $collect['cs_pvh_men_participant_gt35'] ?>").trigger("change");
	$('.record-card #cs_pvh_women_participant_lt35').val("<?= $collect['cs_pvh_women_participant_lt35'] ?>").trigger("change");
	$('.record-card #cs_pvh_women_participant_gt35').val("<?= $collect['cs_pvh_women_participant_gt35'] ?>").trigger("change");
	$('.record-card #expected_be').val("<?= $collect['expected_be'] ?>").trigger("change");
	$('.record-card #real_be').val("<?= $collect['real_be'] ?>").trigger("change");
	$('.record-card #pv_be').val("<?= $collect['pv_be'] ?>").trigger("change");
	$('.record-card #be_men_participant_lt35').val("<?= $collect['be_men_participant_lt35'] ?>").trigger("change");
	$('.record-card #be_men_participant_gt35').val("<?= $collect['be_men_participant_gt35'] ?>").trigger("change");
	$('.record-card #be_women_participant_lt35').val("<?= $collect['be_women_participant_lt35'] ?>").trigger("change");
	$('.record-card #be_women_participant_gt35').val("<?= $collect['be_women_participant_gt35'] ?>").trigger("change");
	$('.record-card #be_mr_men_participant_lt35').val("<?= $collect['be_mr_men_participant_lt35'] ?>").trigger("change");
	$('.record-card #be_mr_men_participant_gt35').val("<?= $collect['be_mr_men_participant_gt35'] ?>").trigger("change");
	$('.record-card #be_mr_women_participant_lt35').val("<?= $collect['be_mr_women_participant_lt35'] ?>").trigger("change");
	$('.record-card #be_mr_women_participant_gt35').val("<?= $collect['be_mr_women_participant_gt35'] ?>").trigger("change");
	$('.record-card #be_pvh_men_participant_lt35').val("<?= $collect['be_pvh_men_participant_lt35'] ?>").trigger("change");
	$('.record-card #be_pvh_men_participant_gt35').val("<?= $collect['be_pvh_men_participant_gt35'] ?>").trigger("change");
	$('.record-card #be_pvh_women_participant_lt35').val("<?= $collect['be_pvh_women_participant_lt35'] ?>").trigger("change");
	$('.record-card #be_pvh_women_participant_gt35').val("<?= $collect['be_pvh_women_participant_gt35'] ?>").trigger("change");

	$('.record-card #annual_plan_approved_ag').val("<?= getTrueOrFalse($collect['annual_plan_approved_ag']) ?>").trigger("change");
	$('.record-card #annual_activity_report_approved_ag').val("<?= getTrueOrFalse($collect['annual_activity_report_approved_ag']) ?>").trigger("change");
	$('.record-card #annual_financial_report_approved_ag').val("<?= getTrueOrFalse($collect['annual_financial_report_approved_ag']) ?>").trigger("change");
	$('.record-card #process_manual_approved_ca').val("<?= getTrueOrFalse($collect['process_manual_approved_ca']) ?>").trigger("change");

	$('.record-card #water_quantity').val("<?= $collect['water_quantity'] ?>").trigger("change");
	$('.record-card #water_cost_m3').val("<?= $collect['water_cost_m3'] ?>").trigger("change");

	$('.record-card #grill_maintenance_cost').val("<?= $collect['grill_maintenance_cost'] ?>").trigger("change");
	$('.record-card #basin_maintenance_cost').val("<?= $collect['basin_maintenance_cost'] ?>").trigger("change");
	$('.record-card #solar_maintenance_cost').val("<?= $collect['solar_maintenance_cost'] ?>").trigger("change");
	$('.record-card #generator_maintenance_cost').val("<?= $collect['generator_maintenance_cost'] ?>").trigger("change");
	$('.record-card #hole_maintenance_cost').val("<?= $collect['hole_maintenance_cost'] ?>").trigger("change");
	$('.record-card #tank_maintenance_cost').val("<?= $collect['tank_maintenance_cost'] ?>").trigger("change");
	$('.record-card #irrigation_network_cost').val("<?= $collect['irrigation_network_cost'] ?>").trigger("change");
	$('.record-card #building_maintenance_cost').val("<?= $collect['building_maintenance_cost'] ?>").trigger("change");
	$('.record-card #agriculture_equipment_maintenance_cost').val("<?= $collect['agriculture_equipment_maintenance_cost'] ?>").trigger("change");
	$('.record-card #animal_maintenance_cost').val("<?= $collect['animal_maintenance_cost'] ?>").trigger("change");
	$('.record-card #other_maintenance_cost').val("<?= $collect['other_maintenance_cost'] ?>").trigger("change");
	$('.record-card #other_maintenance_cost_description').val("<?= $collect['other_maintenance_cost_description'] ?>").trigger("change");

	$('.record-card #have_management_tool').val("<?= getTrueOrFalse($collect['have_management_tool']) ?>").trigger("change");
	$('.record-card #is_management_tool_updated').val("<?= getTrueOrFalse($collect['is_management_tool_updated']) ?>").trigger("change");
	$('.record-card #is_parcel_assignation_register_updated').val("<?= getTrueOrFalse($collect['is_parcel_assignation_register_updated']) ?>").trigger("change");
	$('.record-card #cash_slip').val("<?= getTrueOrFalse($collect['cash_slip']) ?>").trigger("change");
	$('.record-card #disbursment_slip').val("<?= getTrueOrFalse($collect['disbursment_slip']) ?>").trigger("change");
	$('.record-card #cash_journal').val("<?= getTrueOrFalse($collect['cash_journal']) ?>").trigger("change");
	$('.record-card #bank_journal').val("<?= getTrueOrFalse($collect['bank_journal']) ?>").trigger("change");
	$('.record-card #expenses_note').val("<?= getTrueOrFalse($collect['expenses_note']) ?>").trigger("change");
	$('.record-card #invoice_note').val("<?= getTrueOrFalse($collect['invoice_note']) ?>").trigger("change");
	$('.record-card #payment_note').val("<?= getTrueOrFalse($collect['payment_note']) ?>").trigger("change");
	$('.record-card #budget').val("<?= getTrueOrFalse($collect['budget']) ?>").trigger("change");
	$('.record-card #resources').val("<?= getTrueOrFalse($collect['resources']) ?>").trigger("change");

	$('.record-card #membership_amount').val("<?= $collect['membership_amount'] ?>").trigger("change");
	$('.record-card #social_part_total_amount').val("<?= $collect['social_part_total_amount'] ?>").trigger("change");
	$('.record-card #membership_fees').val("<?= $collect['membership_fees'] ?>").trigger("change");
	$('.record-card #membership_royalties').val("<?= $collect['membership_royalties'] ?>").trigger("change");
	$('.record-card #loan').val("<?= $collect['loan'] ?>").trigger("change");
	$('.record-card #subventions').val("<?= $collect['subventions'] ?>").trigger("change");
	$('.record-card #donations').val("<?= $collect['donations'] ?>").trigger("change");
	$('.record-card #other_Revenues').val("<?= $collect['other_revenues'] ?>").trigger("change");
	$('.record-card #other_Revenue_Description').val("<?= $collect['other_revenue_description'] ?>").trigger("change");

/*	$('.record-card #date_creation').val("<?= $collect['date_creation'] ?>").trigger("change");
	$('.record-card #date_validation').val("<?= $collect['date_validation'] ?>").trigger("change");
	$('.record-card #creator_id').val("<?= $collect['creator_id'] ?>").trigger("change");
	$('.record-card #validator_id').val("<?= $collect['validator_id'] ?>").trigger("change");
	$('.record-card #status').val("<?= $collect['status'] ?>").trigger("change");
*/	$('.record-card #partnership_commune').val("<?= getTrueOrFalse($collect['partnership_commune']) ?>").trigger("change");
	$('.record-card #commune_partner').val("<?= $collect['commune_partner'] ?>").trigger("change");
	$('.record-card #maintenance_contract').val("<?= getTrueOrFalse($collect['maintenance_contract']) ?>").trigger("change");
	$('.record-card #maintenance_partner').val("<?= $collect['maintenance_partner'] ?>").trigger("change");
	$('.record-card #other_partnership').val("<?= getTrueOrFalse($collect['other_partnership']) ?>").trigger("change");
	$('.record-card #other_partner').val("<?= $collect['other_partner'] ?>").trigger("change");
	$('.record-card #part_of_federation').val("<?= getTrueOrFalse($collect['part_of_federation']) ?>").trigger("change");
	$('.record-card #federation_partner').val("<?= $collect['federation_partner'] ?>").trigger("change");

	<?php
		$bank_accounts = $collect['bank_account'];
		$html_bank_accounts = "";
		foreach($bank_accounts as $bank_account){
			$html_bank_accounts .=
			"<div class='base'>"
				."<!-- Champ speculation id -->"
				."<input type='hidden' id='bank_account_id' name='bank_account_id[]' value='".$bank_account['id']."'/>"     
				."<!-- Institution financiere -->"
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='bank' class='font-weight-bold'>Institution financiere</label>"
					."<input required class='form-control' type='text' id='bank' name='bank[]' value='".$bank_account['bank']."'/>"       
				."</div>"
				."<!-- Numero de compte -->"
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='bank_account' class='font-weight-bold'>Num&eacute;ro de compte</label>"
					."<input required class='form-control' type='text' id='bank_account' name='bank_account[]' value='".$bank_account['bank_account']."'/>"      
				."</div>"			
				."<hr class='m-4 border border-secondary bg-secondary' size=5 />"
			."</div>";
		}
		if(!empty($html_bank_accounts)){
			?>
			$('.record-card #bank_account_id').closest('.base').remove();
			$('.record-card fieldset#3 .clone-action').before("<?= $html_bank_accounts ?>");
			<?php
		}
	?>
	<?php
		require_once("commons/support_form_effect.php");
		$supports = $collect['support'];
		$capacity_building = getTrueOrFalse($collect['capacity_building']);
		$html_supports = reconstruct_supports($supports,false,true);
		if(!empty($html_supports)){
			?>				
			$('.record-card #support_id').closest('.base').remove();
			$('.record-card fieldset#15 .clone-action').before("<?= $html_supports ?>");
			<?php
		}
		?>
			$('#capacity_building').val("<?= $capacity_building ?>").trigger('change');				
		<?php
	?>
	
	<?php
		require_once("commons/credit_form_effect.php");
		$credits = $collect['credit'];
		$html_credits = reconstruct_credits($credits);
		$credit_request = getTrueOrFalse($collect['credit_request']);
		
		if(!empty($html_credits)){
			?>
			$('.record-card #credit_id').closest('.base').remove();
			$('.record-card fieldset#14').append("<?= $html_credits ?>");
			<?php
		}
		?>
			$('#credit_request').val("<?= $credit_request ?>").trigger('change');				
		<?php
		foreach($credits as $credit){
			$credit_request_ok = getTrueOrFalse($credit['credit_request_ok']);
		?>
		$("#credit_request_ok").on('change',function(){
			if($(this).val() == "false"){
				$("#credit_ok_details").hide();
			}else if($(this).val() == "true"){
				$("#credit_ok_details").show();
			}
		});
		$('#credit_request_ok').val("<?= $credit_request_ok ?>").trigger('change');				
		<?php
		}
	?>

	<?php
		require_once("commons/employee_form_effect.php");
		$employees = $collect['employee'];
		$employee_count = $collect['employee_count'];
		$html_employees = reconstruct_employees($employees);
		?>
			$('#employee_count').val("<?= $employee_count ?>");	
		<?php
		if(!empty($html_employees)){
			?>				
			$('.record-card #employee_id').closest('.base').remove();
			$('.record-card fieldset#7 #employees').html("<?= $html_employees ?>");

			$('#employees').show();			
			<?php
		}
	?>
});
</script>