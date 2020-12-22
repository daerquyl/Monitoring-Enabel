	<!--  
	Outils de gestion
	-->
	<fieldset id="12">
		<!-- Outils de gestion en place -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="have_management_tool" class="font-weight-bold">Outils de gestion en place</label>
			<select class="form-control" id="have_management_tool" name="have_management_tool"
			data-validation="non_empty_select" >				
			<option value="-">-</option>
				<option value="NA">N/A</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>	
		<!-- Outils de gestionmis a jour-->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="is_management_tool_updated" class="font-weight-bold">Outils de gestion mis &agrave; jour</label>
			<select class="form-control" id="is_management_tool_updated" name="is_management_tool_updated"
			data-validation="non_empty_select" >				
			<option value="-">-</option>
				<option value="NA">N/A</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>
		<!-- Registre d'affectation de parcelles a jour-->
		<label for="" class="font-weight-bold">Outils de suivi de parcelle</label>
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="is_parcel_assignation_register_updated" class="font-weight-bold">Registre d'affectation de parcelles &agrave; jour par campagne</label>
			<select class="form-control" id="is_parcel_assignation_register_updated" name="is_parcel_assignation_register_updated"
			data-validation="non_empty_select" >				
			<option value="-">-</option>
				<option value="NA">N/A</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>
		<label for="" class="font-weight-bold">Outils de suivi de la tr&eacute;sorerie</label>
		<!-- Bordereau d'encaissement-->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="cash_slip" class="font-weight-bold">Bordereau d'encaissement</label>
			<select class="form-control" id="cash_slip" name="cash_slip"
			data-validation="non_empty_select" >				
			<option value="-">-</option>
				<option value="NA">N/A</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>
		<!-- Bordereau de dencaissement-->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="disbursment_slip" class="font-weight-bold">Bordereaux de d&eacute;caissement</label>
			<select class="form-control" id="disbursment_slip" name="disbursment_slip"
			data-validation="non_empty_select" >				
			<option value="-">-</option>
				<option value="NA">N/A</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>
		<!-- Journal caisse-->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="cash_journal" class="font-weight-bold">Journal caisse</label>
			<select class="form-control" id="cash_journal" name="cash_journal"
			data-validation="non_empty_select" >				
			<option value="-">-</option>
				<option value="NA">N/A</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>
		<!-- Journal de banque-->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="bank_journal" class="font-weight-bold">Journal de banque</label>
			<select required class="form-control" id="bank_journal" name="bank_journal"
			data-validation="non_empty_select" >				
			<option value="-">-</option>
				<option value="NA">N/A</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>
		<label for="" class="font-weight-bold">Outils de suivi des d&eacute;penses et des recettes</label>
		<!-- Fiche engagement depenses-->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="expenses_note" class="font-weight-bold">Fiche d'engagement de d&eacute;penses</label>
			<select class="form-control" id="expenses_note" name="expenses_note"
			data-validation="non_empty_select" >				
			<option value="-">-</option>
				<option value="NA">N/A</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>
		<!--Quittance de facturation-->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="invoice_note" class="font-weight-bold">Quittances de facturation redevances</label>
			<select class="form-control" id="invoice_note" name="invoice_note"
			data-validation="non_empty_select" >				
			<option value="-">-</option>
				<option value="NA">N/A</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>
		<!--Fiche de paie-->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="payment_note" class="font-weight-bold">Fiche de paie (personnel de la cooperative ...)</label>
			<select class="form-control" id="payment_note" name="payment_note"
			data-validation="non_empty_select" >				
			<option value="-">-</option>
				<option value="NA">N/A</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>
		<label for="" class="font-weight-bold">Outils de planification, contr&ocirc;les et de suivi</label>
		<!--Budget-->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="budget" class="font-weight-bold">Budget</label>
			<select class="form-control" id="budget" name="budget"
			data-validation="non_empty_select" >				
			<option value="-">-</option>
				<option value="NA">N/A</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>
		<!--Emplois et ressources-->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="resources" class="font-weight-bold">Tableau emplois et ressources</label>
			<select class="form-control" id="resources" name="resources"
			data-validation="non_empty_select" >				
			<option value="-">-</option>
				<option value="NA">N/A</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>	
	</fieldset>
