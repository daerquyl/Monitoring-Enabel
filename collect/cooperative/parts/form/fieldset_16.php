	<!--  
	partenariats
	 -->
	<fieldset id="16">
		<!-- Champ Partenariat avec la commune -->
		<div class="form-row pb-0 pt-1 mt-2">
			<div class="col">
				<label for="partnership_commune" class="font-weight-bold">Partenariat avec commune</label>
				<select required class="form-control" id="partnership_commune" name="partnership_commune"
					data-validation="non_empty_select">
					<option value="-">-</option>
					<option value="false">Non</option>
					<option value="true">Oui</option>
				</select>
			</div>
			<div class="col">
				<label for="commune_partner">A pr&eacute;ciser</label>
				<input 
				data-validation="required" 
				data-validation-depends-on="partnership_commune" 
				data-validation-depends-on-value="true"
				class="form-control" type="text" id="commune_partner" name="commune_partner"/>       
			</div>
		</div>			

		<!-- Champ Contrat de maintenance -->
		<div class="form-row pb-0 pt-1 mt-2">
			<div class="col">
				<label for="maintenance_contract" class="font-weight-bold">Contrat de maintenance</label>
				<select required class="form-control" id="maintenance_contract" name="maintenance_contract"
					data-validation="non_empty_select">
					<option value="-">-</option>
					<option value="false">Non</option>
					<option value="true">Oui</option>
				</select>
			</div>
			<div class="col">
				<label for="maintenance_partner">A pr&eacute;ciser</label>
				<input class="form-control" 
				data-validation="required" 
				data-validation-depends-on="maintenance_contract" 
				data-validation-depends-on-value="true"
				type="text" id="maintenance_partner" name="maintenance_partner"/>       
			</div>
		</div>	
		<!-- Champ Autres partenaires-->
		<div class="form-row pb-0 pt-1 mt-2">
			<div class="col">
				<label for="other_partnership" class="font-weight-bold">Autre partenaire</label>
				<select required class="form-control" id="other_partnership" name="other_partnership"
					data-validation="non_empty_select">
					<option value="-">-</option>
					<option value="false">Non</option>
					<option value="true">Oui</option>
				</select>
			</div>
			<div class="col">
				<label for="other_partner">A pr&eacute;ciser</label>
				<input class="form-control" 
				data-validation="required" 
				data-validation-depends-on="other_partnership" 
				data-validation-depends-on-value="true"
				type="text" id="other_partner" 
				name="other_partner"/>       
			</div>
		</div>	
		
		<!-- Champ Appartenance a une federation -->
		<div class="form-row pb-0 pt-1 mt-2">
			<div class="col">
				<label for="part_of_federation" class="font-weight-bold">Appartenance f&eacute;d&eacute;ration</label>
				<select required class="form-control" id="part_of_federation" name="part_of_federation"
					data-validation="non_empty_select">
					<option value="-">-</option>
					<option value="false">Non</option>
					<option value="true">Oui</option>
				</select>
			</div>
			<div class="col">
				<label for="federation_partner">A pr&eacute;ciser</label>
				<input class="form-control" 
				data-validation="required" 
				data-validation-depends-on="part_of_federation" 
				data-validation-depends-on-value="true"
				type="text" id="federation_partner" name="federation_partner"/>       
			</div>
		</div>	
	</fieldset>
