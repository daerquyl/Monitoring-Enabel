<script>
$(document).ready(function(){
	var values = "";
	//Script pour mettre a jour les valeurs actuelles de la $collecte dans le formulaire
	$('.record-card #id').val("<?= $collect['id'] ?>").trigger("change");
	$('.record-card #collect_id').val("<?= $collect['id'] ?>").trigger("change");
	$('.record-card #commune_id').val("<?= $collect['commune_id'] ?>").trigger("change");

	$('.record-card #name').val("<?= $collect['name'] ?>").trigger("change");
	$('.record-card #headquarter').val("<?= $collect['headquarter'] ?>").trigger("change");
	$('.record-card #created').val("<?= $collect['created'] ?>").trigger("change");
	$('.record-card #legal_status').val("<?= $collect['legal_status'] ?>").trigger("change");
	$('.record-card #capital').val("<?= $collect['capital'] ?>").trigger("change");
	$('.record-card #ninea').val("<?= $collect['ninea'] ?>").trigger("change");
	$('.record-card #rccm').val("<?= $collect['rccm'] ?>").trigger("change");
	$('.record-card #manager').val("<?= $collect['manager'] ?>").trigger("change");
	$('.record-card #phone').val("<?= $collect['phone'] ?>").trigger("change");
	$('.record-card #address').val("<?= $collect['address'] ?>").trigger("change");
	$('.record-card #age').val("<?= $collect['age'] ?>").trigger("change");
	$('.record-card #manager_position').val("<?= $collect['manager_position'] ?>").trigger("change");
	$('.record-card #principal_activity').val("<?= $collect['principal_activity'] ?>").trigger("change");
	$('.record-card #other_activites').val("<?= $collect['other_activites'] ?>").trigger("change");		
	$('.record-card #other_sector').val("<?= $collect['other_sector'] ?>").trigger("change");
	$('.record-card #sectors').val("<?= $collect['sectors'] ?>").trigger("change");
	$('.record-card #position_in_value_stream').val("<?= $collect['position_in_value_stream'] ?>").trigger("change");
	$('.record-card #created_before_pareba').val("<?= getTrueOrFalse($collect['created_before_pareba']) ?>").trigger("change");
	$('.record-card #trained_by_pareba').val("<?= getTrueOrFalse($collect['trained_by_pareba']) ?>").trigger("change");
	$('.record-card #manager_revenue').val("<?= $collect['manager_revenue'] ?>").trigger("change");
	$('.record-card #worked_trimesters').val("<?= $collect['worked_trimesters'] ?>").trigger("change");
	$('.record-card #ca_before_pareba').val("<?= $collect['ca_before_pareba'] ?>").trigger("change");

	$('.record-card #men_shareholder_lt35').val("<?= $collect['men_shareholder_lt35'] ?>").trigger("change");
	$('.record-card #men_shareholder_gt35').val("<?= $collect['men_shareholder_gt35'] ?>").trigger("change");
	$('.record-card #women_shareholder_lt35').val("<?= $collect['women_shareholder_lt35'] ?>").trigger("change");
	$('.record-card #women_shareholder_gt35').val("<?= $collect['women_shareholder_gt35'] ?>").trigger("change");
	$('.record-card #mr_men_shareholder_lt35').val("<?= $collect['mr_men_shareholder_lt35'] ?>").trigger("change");
	$('.record-card #mr_men_shareholder_gt35').val("<?= $collect['mr_men_shareholder_gt35'] ?>").trigger("change");
	$('.record-card #mr_women_shareholder_lt35').val("<?= $collect['mr_women_shareholder_lt35'] ?>").trigger("change");
	$('.record-card #mr_women_shareholder_gt35').val("<?= $collect['mr_women_shareholder_gt35'] ?>").trigger("change");
	$('.record-card #pvh_men_shareholder_lt35').val("<?= $collect['pvh_men_shareholder_lt35'] ?>").trigger("change");
	$('.record-card #pvh_men_shareholder_gt35').val("<?= $collect['pvh_men_shareholder_gt35'] ?>").trigger("change");
	$('.record-card #pvh_women_shareholder_lt35').val("<?= $collect['pvh_women_shareholder_lt35'] ?>").trigger("change");
	$('.record-card #pvh_women_shareholder_gt35').val("<?= $collect['pvh_women_shareholder_gt35'] ?>").trigger("change");

	$('.record-card #ca').val("<?= $collect['ca'] ?>").trigger("change");
	$('.record-card #salary_expenses').val("<?= $collect['salary_expenses'] ?>").trigger("change");
	$('.record-card #other_expenses').val("<?= $collect['other_expenses'] ?>").trigger("change");
	$('.record-card #other_expenses_description').val("<?= $collect['other_expenses_description'] ?>").trigger("change");	
	$('.record-card #incomes').val("<?= $collect['incomes'] ?>").trigger("change");	
	<?php
		require_once("commons/support_form_effect.php");
		$supports = $collect['support'];
		$capacity_building = getTrueOrFalse($collect['capacity_building']);
		$html_supports = reconstruct_supports($supports,true);
		if(!empty($html_supports)){
			?>				
			$('.record-card #support_id').closest('.base').remove();
			$('.record-card fieldset#7 .clone-action').before("<?= $html_supports ?>");
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
			$('.record-card fieldset#6').append("<?= $html_credits ?>");
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
		$html_employees = reconstruct_employees($employees, false);
		?>
			$('#employee_count').val("<?= $employee_count ?>");	
		<?php
		if(!empty($html_employees)){
			?>				
			$('.record-card #employee_id').closest('.base').remove();
			$('.record-card fieldset#4 #employees').html("<?= $html_employees ?>");

			$('#employees').show();			
			<?php
		}
	?>
});
</script>