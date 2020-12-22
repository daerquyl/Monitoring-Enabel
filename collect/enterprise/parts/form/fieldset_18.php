	<!--  
	Compte d'exploitation
	 -->
	<fieldset id="18">
		<!-- Chiffre d'affaire  -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="ca" class="font-weight-bold">Chiffre d'affaire</label>
			<input data-validation="number required" class="form-control" type="number" id="ca" name="ca" placeholder="FCFA"/>       
		</div>										
		<!-- Charges salariales  -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="salary_expenses" class="font-weight-bold">Charges salariales</label>
			<input data-validation="number required" class="form-control" type="number" id="salary_expenses" name="salary_expenses" placeholder="FCFA"/>       
		</div>										
		<!-- Autres charges  -->
		<div class="form-group pb-0 pt-0 mt-0">
		<div class="form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="other_expenses" class="font-weight-bold">Autres charges</label>
				<input data-validation="number required" class="form-control" type="number" id="other_expenses" name="other_expenses" placeholder="FCFA"/>       
			</div>
			<div class="col">
				<label for="other_expenses_description" class="font-weight-bold">Description</label>
				<input class="form-control" type="text" id="other_expenses_description" name="other_expenses_description"/>       
			</div>
		</div>										
		<!-- Produits d'exploitation  -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="incomes" class="font-weight-bold">Produits d'exploitation</label>
			<input data-validation="number required" class="form-control" type="number" id="incomes" name="incomes" placeholder="FCFA"/>       
		</div>										
	</fieldset>
