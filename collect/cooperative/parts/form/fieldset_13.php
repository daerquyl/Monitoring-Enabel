	<!--  
	Ressources financieres mobilisees
	-->
	<fieldset id="13">
		<!-- Champ Montant adhesion-->
		<div class="form-row pb-0 pt-0 mt-0">
			<script>
				$(document).ready(function(){
					$('#legal_status').on('change',function(){
						var isGie = $(this).val() == "GIE";
						//SI GIE Afficher Droits adhesion, cotisation, et retirer date agrement numero agrement
						if(isGie){	
							$("#membership_amount").val('');
							$("#membership_amount").parent().show();							
							$("#adhesion_amount").val('');
							$("#adhesion_amount").parent().show();

							$("#agreement_date").val(0);
							$("#agreement_date").parent().hide();
							$("#agreement_number").val(0);
							$("#agreement_number").parent().hide();							
							$("#social_part_total_amount").val(0);
							$("#social_part_total_amount").parent().hide();
							$("#social_part_amount").val(0);
							$("#social_part_amount").parent().hide();
							$("#capital").val(0);
							$("#capital").parent().hide();
							
						}else{
							$("#membership_amount").val(0);
							$("#membership_amount").parent().hide();							
							$("#adhesion_amount").val(0);
							$("#adhesion_amount").parent().hide();

							$("#agreement_date").val('');
							$("#agreement_date").parent().show();
							$("#agreement_number").val('');
							$("#agreement_number").parent().show();
							
							$("#social_part_total_amount").val('');
							$("#social_part_total_amount").parent().show();
							$("#social_part_amount").val('');
							$("#social_part_amount").parent().show();
							$("#capital").val('');
							$("#capital").parent().show();
						}
					});
				});
			</script>
			<div class="col">
				<label for="membership_amount">Montant total des adh&eacute;sions per&ccedil;ues</label>
				<input class="form-control" type="number" 
				data-validation="required number" id="membership_amount" 
				name="membership_amount" 
				data-validation-depends-on="legal_status" 
				data-validation-depends-on-value="GIE"				
				placeholder="FCFA"/>       
			</div>
		</div>									
		<!-- Champ Montant Part sociale-->
		<div class="form-row pb-0 pt-0 mt-2">
			<div class="col">
				<label for="social_part_total_amount">Montant parts sociales</label>
				<input class="form-control" 
				type="number" data-validation="required number" 
				id="social_part_total_amount" name="social_part_total_amount" 
				data-validation-depends-on="legal_status" 
				data-validation-depends-on-value="GIE"
				placeholder="FCFA"/>       
			</div>
		</div>									
		<!-- Champ Montant Cotisations-->
		<div class="form-row pb-0 pt-1 mt-2">
			<div class="col">
				<label for="membership_fees">Montant total des cotisations per&ccedil;ues</label>
				<input class="form-control" type="number" data-validation="required number" id="membership_fees" name="membership_fees" placeholder="FCFA"/>       
			</div>
		</div>									
		<!-- Champ Redevances-->
		<div class="form-row pb-0 pt-1 mt-2">
			<div class="col">
				<label for="membership_royalties">Montant des redevances recouvr&eacute;es</label>
				<input class="form-control" type="number" data-validation="required number" id="membership_royalties" name="membership_royalties" placeholder="FCFA"/>       
			</div>
		</div>									
		<!-- Champ Credit-->
		<div class="form-row pb-0 pt-1 mt-2">
			<div class="col">
				<label for="loan">Montant des cr&eacute;dits recouvr&eacute;</label>
				<input class="form-control" type="number" data-validation="required number" id="loan" name="loan" placeholder="FCFA"/>       
			</div>
		</div>									
		<!-- Champ Subventions-->
		<div class="form-row pb-0 pt-0 mt-2">
			<div class="col">
				<label for="subventions">Montant des subventions</label>
				<input class="form-control" type="number" data-validation="required number" id="subventions" name="subventions" placeholder="FCFA"/>       
			</div>
		</div>									
		<!-- Champ dons-->
		<div class="form-row pb-0 pt-0 mt-2">
			<div class="col">
				<label for="donations">Montant des dons</label>
				<input class="form-control" type="number" data-validation="required number" id="donations" name="donations" placeholder="FCFA"/>       
			</div>
		</div>	
		<!-- Champ Autres ressources -->
		<div class="form-row pb-0 pt-1 mt-2">
			<div class="col">
				<label for="other_revenues">Montant des autres ressources</label>
				<input class="form-control" type="number" data-validation="required number" id="other_revenues" name="other_revenues" placeholder="FCFA"/>       
			</div>
			<div class="col">
				<label for="other_revenue_description">A pr&eacute;ciser</label>
				<input class="form-control" type="text" id="other_revenue_description" name="other_revenue_description" placeholder=""/>       
			</div>
		</div>	
	</fieldset>
