	<!--  
	Acces aux services financiers
	 -->
	<fieldset id="6">
		<!-- Demande de credit -->
		<script>
			$(document).ready(function(){
				$("#credit_request").on('change',function(){
					if($(this).val() == "false"){
						$("#credit_details").hide();
					}else if($(this).val() == "true"){
						$("#credit_details").show();
					}
				})
				$("#credit_request_ok").on('change',function(){
					if($(this).val() == "false"){
						$("#credit_ok_details").hide();
					}else if($(this).val() == "true"){
						$("#credit_ok_details").show();
					}
				})				
			});
		</script>
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="credit_request" class="font-weight-bold">Sollicitation cr&eacute;dit</label>
			<select class="form-control" id="credit_request" name="credit_request"
				data-validation="non_empty_select" >						
				<option value="-">-</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>	
		<div class="base">
			<!-- Champ credit id -->
			<input type="hidden" id="credit_id" name="credit_id[]"/>     
			<div id="credit_details" style="display:none">
				<!-- Obtention du credit  -->
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="credit_request_ok" class="font-weight-bold">Obtention cr&eacute;dit</label>
					<select class="form-control" id="credit_request_ok" name="credit_request_ok"
						data-validation="non_empty_select" 
						data-validation-depends-on="credit_request" 
						data-validation-depends-on-value="true"
					>		
						<option value="-">-</option>
						<option value="false">Non</option>
						<option value="true">Oui</option>
					</select>    
				</div>										
					<!-- Prestataire de service financier  -->
					<div class="form-group pb-0 pt-0 mt-0">
						<label for="financial_institution" class="font-weight-bold">Prestataire</label>
						<select class="form-control"  
						data-validation="non_empty_select" 
						data-validation-depends-on="credit_request" 
						data-validation-depends-on-value="true"
						id="financial_institution" name="financial_institution"> 
							<option value="-">-</option>
							<option value="BAOBAB-UNCDF">BAOBAB</option>
							<option value="COOPEC-RESOPP">COOPEC-RESOPP</option>
							<option value="CMS">CMS</option>
							<option value="TONTINE">TONTINE</option>
							<option value="COMMERCANT">Commer&ccedil;ant(y compris boutiquier)</option>
							<option value="AUTRE">AUTRE</option>
						</select>
					</div>	
					<!-- Objet du credit -->
					<div class="form-group pb-0 pt-0 mt-0">
						<label for="credit_object" class="font-weight-bold">Objet cr&eacute;dit</label>
						<select class="form-control" id="credit_object" name="credit_object" multiple
							data-validation="non_empty_select"
							data-validation-depends-on="credit_request" 
							data-validation-depends-on-value="true">
							<option value="-">-</option>
							<option value="PRODUCTION">Production</option>
							<option value="CONSOMMATION">Consommation</option>
							<option value="EQUIPEMENT">Equipement</option>
							<option value="Autres">Autres</option>
						</select>    
					</div>	
					<!-- Montant du credit -->
					<div class="form-group pb-0 pt-0 mt-0">
						<label for="credit_amount" class="font-weight-bold">Montant cr&eacute;dit</label>
						<input class="form-control" 
						data-validation="required number" 
						data-validation-depends-on="credit_request" 
						data-validation-depends-on-value="true"
						type="number" id="credit_amount" name="credit_amount" 
						data-sanitize-number-format="0,0" placeholder="FCFA"/>       
					</div>	
				<div id="credit_ok_details" style="display:none">
					<!-- Taux du credit -->
					<div class="form-group pb-0 pt-0 mt-0">
						<label for="credit_rate" class="font-weight-bold">Taux d'int&eacute;r&ecirc;t</label>
						<input class="form-control" 
						data-validation="required number" type="number" 
						data-validation-depends-on="credit_request" 
						data-validation-depends-on-value="true"
						id="credit_rate" name="credit_rate"  placeholder="%"/>       
					</div>	
					<!-- Duree du credit -->
					<div class="form-group pb-0 pt-0 mt-0">
						<label for="credit_duration" class="font-weight-bold">Dur&eacute;e cr&eacute;dit</label>
						<input class="form-control" 
						data-validation="required number" 
						data-validation-depends-on="credit_request" 
						data-validation-depends-on-value="true"
						type="number" id="credit_duration" name="credit_duration" placeholder="mois"/>       
					</div>	
					<!-- Type de remboursement -->
					<div class="form-group pb-0 pt-0 mt-0">
						<label for="credit_repayment_type" class="font-weight-bold">Type  remboursement</label>
						<select class="form-control" id="credit_repayment_type" name="credit_repayment_type"
							data-validation="non_empty_select" 
							data-validation-depends-on="credit_request" 
							data-validation-depends-on-value="true">
							<option value="-">-</option>
							<option value="NATURE">Nature</option>
							<option value="NUMERAIRE">Num&eacute;raire</option>
						</select>    
					</div>								
					<!-- Mode de remboursement -->
					<div class="form-group pb-0 pt-0 mt-0">
						<label for="credit_repayment_mode" class="font-weight-bold">Mode remboursement</label>
						<select class="form-control" id="credit_repayment_mode" name="credit_repayment_mode"
							data-validation="non_empty_select" 
							data-validation-depends-on="credit_request" 
							data-validation-depends-on-value="true">
							<option value="-">-</option>
							<option value="IN_FINE">IN FINE</option>
							<option value="ECHELONNE">Echelonn&eacute;</option>
						</select>    
					</div>
					<!-- Etat des remboursements -->
					<label for="" class="font-weight-bold">Etat des remboursements</label>									
					<div class="form-group pb-0 pt-0 mt-0">
						<select class="form-control" id="credit_payment_status" name="credit_payment_status"
							data-validation="non_empty_select" 
							data-validation-depends-on="credit_request" 
							data-validation-depends-on-value="true">
							<option value="-">-</option>
							<option value="EN COURS">En cours sans retard</option>
							<option value="PAYE">Pay&eacute;</option>
							<option value="EN RETARD">En cours avec retard</option>
						</select>    
					</div>
				</div>
			</div>
		</div>
	</fieldset>
