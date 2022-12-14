<?php
	function reconstruct_credits($credits){
		$html_credits = "";
		foreach($credits as $credit){
			$html_credits .= 
			"<div class='base'>"
				."<!-- Champ credit id -->"
				."<input type='hidden' id='credit_id' name='credit_id[]' value='".$credit['id']."'/>"     
				."<div id='credit_details' style='display:none'>"
					."<!-- Obtention du credit  -->"
					."<div class='form-group pb-0 pt-0 mt-0'>"
						."<label for='credit_request_ok' class='font-weight-bold'>Obtention cr&eacute;dit</label>"
						."<select class='form-control' id='credit_request_ok' name='credit_request_ok'"
							."data-validation='non_empty_select'" 
							."data-validation-depends-on='credit_request'" 
							."data-validation-depends-on-value='true'"
						.">"		
							."<option value='-'>-</option>"
							."<option value='false'>Non</option>"
							."<option value='true'>Oui</option>"
						."</select>"    
					."</div>"	
						."<!-- Prestataire de service financier  -->"
						."<div class='form-group pb-0 pt-0 mt-0'>"
							."<label for='financial_institution' class='font-weight-bold'>Prestataire</label>"
							."<input class='form-control'" 
							."data-validation='required'" 
							."data-validation-depends-on='credit_request'" 
							."data-validation-depends-on-value='true'"
							."type='text' id='financial_institution' name='financial_institution' value='".$credit['financial_institution']."'/> "      
						."</div>"	
						."<!-- Objet du credit -->"
						."<div class='form-group pb-0 pt-0 mt-0'>"
							."<label for='credit_object' class='font-weight-bold'>Objet cr&eacute;dit</label>"
							."<select class='form-control' id='credit_object' name='credit_object' multiple"
								."data-validation='non_empty_select'"
								."data-validation-depends-on='credit_request'" 
								."data-validation-depends-on-value='true'>"
								."<option value='-'>-</option>"
								."<option value='CAMPAGNE' ".((strpos($credit['credit_object'], 'CAMPAGNE') !== false)? 'selected' : '').">Campagne</option>"
								."<option value='CONSOMMATION' ".((strpos($credit['credit_object'], 'CONSOMMATION') !== false)? 'selected' : '').">Consommation</option>"
								."<option value='EQUIPEMENT' ".((strpos($credit['credit_object'], 'EQUIPEMENT') !== false)? 'selected' : '').">Equipement</option>"
								."<option value='Autres' ".((strpos($credit['credit_object'], 'Autres') !== false)? 'selected' : '').">Autres</option>"
							."</select>"    
						."</div>"	
						."<!-- Montant du credit -->"
						."<div class='form-group pb-0 pt-0 mt-0'>"
							."<label for='credit_amount' class='font-weight-bold'>Montant cr&eacute;dit</label>"
							."<input class='form-control'" 
							."data-validation='required number'" 
							."data-validation-depends-on='credit_request'" 
							."data-validation-depends-on-value='true'"
							."type='number' id='credit_amount'" 
							."value='".$credit['credit_amount']."'"
							."data-sanitize-number-format='0,0' placeholder='FCFA'/>"       
						."</div>"	
					."<div id='credit_ok_details' style='display:none'>"
						."<!-- Taux du credit -->"
						."<div class='form-group pb-0 pt-0 mt-0'>"
							."<label for='credit_rate' class='font-weight-bold'>Taux d'int&eacute;r&ecirc;t</label>"
							."<input class='form-control'" 
							."data-validation='required number' data-validation-allowing='float'" 
							."data-validation-depends-on='credit_request'" 
							."data-validation-depends-on-value='true'"
							."value='".$credit['credit_rate']."'"
							."id='credit_rate' name='credit_rate'  placeholder='%'/>"       
						."</div>"	
						."<!-- Duree du credit -->"
						."<div class='form-group pb-0 pt-0 mt-0'>"
							."<label for='credit_duration' class='font-weight-bold'>Dur&eacute;e cr&eacute;dit</label>"
							."<input class='form-control'" 
							."data-validation='required number'" 
							."data-validation-depends-on='credit_request'" 
							."data-validation-depends-on-value='true'"
							."value='".$credit['credit_duration']."'"
							."type='number' id='credit_duration' name='credit_duration' placeholder='mois'/>"       
						."</div>"	
						."<!-- Type de remboursement -->"
						."<div class='form-group pb-0 pt-0 mt-0'>"
							."<label for='credit_repayment_type' class='font-weight-bold'>Type  remboursement</label>"
							."<select class='form-control' id='credit_repayment_type' name='credit_repayment_type'"
								."data-validation='non_empty_select'" 
								."data-validation-depends-on='credit_request'" 
								."data-validation-depends-on-value='true'>"
								."<option value='-'>-</option>"
								."<option value='NATURE'  ".(($credit['credit_repayment_type'] == 'NATURE')? 'selected' : '').">Nature</option>"
								."<option value='NUMERAIRE'  ".(($credit['credit_repayment_type'] == 'NUMERAIRE')? 'selected' : '').">Num&eacute;raire</option>"
							."</select>"    
						."</div>"								
						."<!-- Mode de remboursement -->"
						."<div class='form-group pb-0 pt-0 mt-0'>"
							."<label for='credit_repayment_mode' class='font-weight-bold'>Mode remboursement</label>"
							."<select class='form-control' id='credit_repayment_mode' name='credit_repayment_mode'"
								."data-validation='non_empty_select'" 
								."data-validation-depends-on='credit_request'" 
								."data-validation-depends-on-value='true'>"
								."<option value='-'>-</option>"
								."<option value='IN_FINE'  ".(($credit['credit_repayment_mode'] == 'IN_FINE')? 'selected' : '').">IN FINE</option>"
								."<option value='ECHELONNE'  ".(($credit['credit_repayment_mode'] == 'ECHELONNE')? 'selected' : '').">Echelonn&eacute;</option>"
							."</select>"    
						."</div>"
						."<!-- Etat des remboursements -->"
						."<label for='' class='font-weight-bold'>Etat des remboursements</label>"									
						."<div class='form-group pb-0 pt-0 mt-0'>"
							."<select class='form-control' id='credit_payment_status' name='credit_payment_status'"
								."data-validation='non_empty_select'" 
								."data-validation-depends-on='credit_request'" 
								."data-validation-depends-on-value='true'>"
								."<option value='-'>-</option>"
								."<option value='EN COURS'   ".(($credit['credit_payment_status'] == 'EN COURS')? 'selected' : '').">En cours</option>"
								."<option value='PAYE'    ".(($credit['credit_payment_status'] == 'PAYE')? 'selected' : '').">Pay&eacute;</option>"
								."<option value='EN RETARD'   ".(($credit['credit_payment_status'] == 'EN RETARD')? 'selected' : '').">En retard</option>"
							."</select>"    
						."</div>"
					."</div>"
				."</div>"
			."</div>";
		}
		return $html_credits;
	}