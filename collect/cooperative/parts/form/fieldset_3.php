	<!--  
	Comptes bancaires
	-->
	<fieldset id="3">
		<div class="base">
			<!-- Champ speculation id -->
			<input type="hidden" id="bank_account_id" name="bank_account_id[]"/>     
			<!-- Institution financiere -->
			<div class="form-group pb-0 pt-0 mt-0">
				<label for="bank" class="font-weight-bold">Partenaire financier</label>
				<input class="form-control" type="text" id="bank" name="bank[]"/>       
			</div>
			<!-- Numero de compte -->
			<div class="form-group pb-0 pt-0 mt-0">
				<label for="bank_account" class="font-weight-bold">Num&eacute;ro de compte</label>
				<input class="form-control" type="text" id="bank_account" name="bank_account[]"/>       
			</div>			
			<hr class="m-4 border border-secondary bg-secondary" size=5 />
		</div>
		<div class="clone-action">
			<div class="form-group pb-0 pt-0 mt-0">
				<button class="clone-btn btn btn-secondary btn-block"><i class="fa fa-plus-circle" style="font-size : 1.25em;"></i></button>       
			</div>	
		</div>
	</fieldset>

