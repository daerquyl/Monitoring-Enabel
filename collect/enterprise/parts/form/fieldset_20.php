	<!--  
	Acces aux services non financiers
	 -->
	<fieldset id="20">
		<!-- Renforcement de capacites -->
		<script>
			$(document).ready(function(){
				$("#capacity_building").on('change',function(){
					if($(this).val() == "false"){
						$("#capacity_building_details").hide();
					}else if($(this).val() == "true"){
						$("#capacity_building_details").show();
					}
				})
			});
			
			$('#provider').on('change',function(){
				var otherProvider = $(this).val() == "AUTRE";
				console.log(1);
				if(!otherProvider){
					console.log(2);
					$("#other_provider").val('');
					$("#other_provider").parent().hide();
				}else{
					console.log(3);
					$("#other_provider").val('-');
					$("#other_provider").parent().show();
				}
			});

			$('#type').on('change',function(){
				var otherSupport = $(this).val() == "AUTRE";
				if(!otherSupport){
					$("#other_support").val('');
					$("#other_support").parent().hide();
				}else{
					$("#other_support").val('-');
					$("#other_support").parent().show();
				}
			});
		</script>
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="capacity_building" class="font-weight-bold">Acc&egrave;s services non financiers</label>
			<select class="form-control" id="capacity_building" name="capacity_building"
				data-validation="non_empty_select" >
				<option value="-">-</option>				
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>		
		<div id="capacity_building_details" style="display:none">
			<div class="base">
				<!-- Champ support id -->
				<input type="hidden" id="support_id" name="support_id[]"/>     
				<!-- Prestataire -->
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="provider" class="font-weight-bold">Fournisseur</label>
					<select class="form-control" 
						data-validation="non_empty_select"
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true"
						id="provider" name="provider[]">
						<option value="-">-</option>
						<option value="CAPER">CAPER</option>
						<option value="CCA">CCA</option>
						<option value="BAOBAB-UNCDF">BAOBAB-UNCDF</option>
						<option value="COOPEC-RESOPP">COOPEC-RESOPP</option>
						<option value="ANCAR">PME</option>
						<option value="AUTRE">Autre</option>
					</select>    
				</div>			
				<!-- Autre Fournisseur -->
				<div class="form-group pb-0 pt-0 mt-0" style="display:none">
					<label for="other_provider" class="font-weight-bold">Autre fournisseur</label>
					<input data-validation="required" class="form-control" type="text" id="other_provider" name="other_provider[]"/>       
				</div>
				<!-- Type appui -->
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="type" class="font-weight-bold">Type d'appui</label>
					<select class="form-control" id="type" name="type[]"
						data-validation="non_empty_select"
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true">
						<option value="-">-</option>
						<option value="COACHING">Appui conseil / Coaching</option>
						<option value="FORMATION">Formation</option>
						<option value="MISE EN RESEAU">Mise en r&eacute;seau</option>
						<option value="AUTRE">Autre</option>
					</select>        
				</div>					
				<!-- Autre Appui -->
				<div class="form-group pb-0 pt-0 mt-0"  style="display:none">
					<label for="other_support" class="font-weight-bold">Autre type d'appui</label>
					<input data-validation="required" class="form-control" type="text" id="other_support" name="other_support[]"/>       
				</div>
				<!-- Beneficiaires -->
				<label for="" class="font-weight-bold">B&eacute;n&eacute;ficiaires</label>									
				<div class="form-row pb-0 pt-0 mt-0 mb-3">
					<div class="col">
						<label for="men_beneficiary_lt35" class="font-weight-bold text-muted">H Jeunes</label>
						<input class="form-control" type="number" 
						data-validation="required number" 
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true"
						id="men_beneficiary_lt35" name="men_beneficiary_lt35[]"/>       
					</div>
					<div class="col">
						<label for="men_beneficiary_gt35" class="font-weight-bold text-muted">H Adultes</label>
						<input class="form-control" type="number" 
						data-validation="required number"
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true"
						id="men_beneficiary_gt35" name="men_beneficiary_gt35[]"/>       
					</div>
					<div class="col">
						<label for="women_beneficiary_lt35" class="font-weight-bold text-muted">F Jeunes</label>
						<input class="form-control" type="number" 
						data-validation="required number" id="women_beneficiary_lt35" 
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true"
						name="women_beneficiary_lt35[]"/>       
					</div>
					<div class="col">
						<label for="women_beneficiary_gt35" class="font-weight-bold text-muted">F Adultes</label>
						<input class="form-control" type="number" 
						data-validation="required number" 
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true"
						id="women_beneficiary_gt35" name="women_beneficiary_gt35[]"/>       
					</div>
				</div>
				<!-- Beneficiaires MR -->
				<label for="" class="font-weight-bold">B&eacute;n&eacute;ficiaires Migrants</label>									
				<div class="form-row pb-0 pt-0 mt-0 mb-3">
					<div class="col">
						<label for="mr_men_beneficiary_lt35" class="font-weight-bold text-muted">H Jeunes</label>
						<input class="form-control" type="number" 
						data-validation="required number" id="mr_men_beneficiary_lt35" 
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true"
						name="mr_men_beneficiary_lt35[]"/>       
					</div>
					<div class="col">
						<label for="mr_men_beneficiary_gt35" class="font-weight-bold text-muted">H Adultes</label>
						<input class="form-control" type="number" 
						data-validation="required number" id="mr_men_beneficiary_gt35" 
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true"
						name="mr_men_beneficiary_gt35[]"/>       
					</div>
					<div class="col">
						<label for="mr_women_beneficiary_lt35" class="font-weight-bold text-muted">F Jeunes</label>
						<input class="form-control" type="number" 
						data-validation="required number" id="mr_women_beneficiary_lt35" 
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true"
						name="mr_women_beneficiary_lt35[]"/>       
					</div>
					<div class="col">
						<label for="mr_women_beneficiary_gt35" class="font-weight-bold text-muted">F Adultes</label>
						<input class="form-control" type="number" 
						data-validation="required number" id="mr_women_beneficiary_gt35" 
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true"
						name="mr_women_beneficiary_gt35[]"/>       
					</div>
				</div>	
				<!-- Beneficiaires PVH-->
				<label for="" class="font-weight-bold">B&eacute;n&eacute;ficiaires PVH</label>									
				<div class="form-row pb-0 pt-0 mt-0 mb-3">
					<div class="col">
						<label for="pvh_men_beneficiary_lt35" class="font-weight-bold text-muted">H Jeunes</label>
						<input class="form-control" type="number" 
						data-validation="required number" 
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true"
						id="pvh_men_beneficiary_lt35" name="pvh_men_beneficiary_lt35[]"/>       
					</div>
					<div class="col">
						<label for="pvh_men_beneficiary_gt35" class="font-weight-bold text-muted">H Adultes</label>
						<input class="form-control" type="number" 
						data-validation="required number" 
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true"
						id="pvh_men_beneficiary_gt35" name="pvh_men_beneficiary_gt35[]"/>       
					</div>
					<div class="col">
						<label for="pvh_women_beneficiary_lt35" class="font-weight-bold text-muted">F Jeunes</label>
						<input class="form-control" type="number" 
						data-validation="required number" 
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true"
						id="pvh_women_beneficiary_lt35" name="pvh_women_beneficiary_lt35[]"/>       
					</div>
					<div class="col">
						<label for="pvh_women_beneficiary_gt35" class="font-weight-bold text-muted">F Adultes</label>
						<input class="form-control" type="number" 
						data-validation="required number" 
						data-validation-depends-on="capacity_building" 
						data-validation-depends-on-value="true"
						id="pvh_women_beneficiary_gt35" name="pvh_women_beneficiary_gt35[]"/>       
					</div>
				</div>	
				<hr class="m-4 border border-secondary bg-secondary" size=5 />
			</div>
			
			<div class="clone-action">
				<div class="form-group pb-0 pt-0 mt-0">
					<button class="clone-btn btn btn-secondary btn-block"><i class="fa fa-plus-circle" style="font-size : 1.25em;"></i></button>       
				</div>	
			</div>
		</div>
	</fieldset>
