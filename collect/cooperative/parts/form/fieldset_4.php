	<!--  
	Membres / CA
	-->
	<fieldset id="4">
		<!-- Membres -->
		<label for="" class="font-weight-bold">Membres</label>									
		<div class="form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="men_member_lt35" class="font-weight-bold text-muted">H Jeunes</label>
				<input class="form-control" type="number" data-validation="required number"  id="men_member_lt35" name="men_member_lt35"/>       
			</div>
			<div class="col">
				<label for="men_member_gt35" class="font-weight-bold text-muted">H Adultes</label>
				<input class="form-control" type="number" data-validation="required number"  id="men_member_gt35" name="men_member_gt35"/>       
			</div>
			<div class="col">
				<label for="women_member_lt35" class="font-weight-bold text-muted">F Jeunes</label>
				<input class="form-control" type="number" data-validation="required number"  id="women_member_lt35" name="women_member_lt35"/>       
			</div>
			<div class="col">
				<label for="women_member_gt35" class="font-weight-bold text-muted">F Adultes</label>
				<input class="form-control" type="number" data-validation="required number"  id="women_member_gt35" name="women_member_gt35"/>       
			</div>
		</div>
		<!-- Membres MR -->
		<label for="" class="font-weight-bold">Membres - migrants</label>									
		<div class="form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="mr_men_member_lt35" class="font-weight-bold text-muted">H Jeunes</label>
				<input class="form-control" type="number" data-validation="required number"  id="mr_men_member_lt35" name="mr_men_member_lt35"/>       
			</div>
			<div class="col">
				<label for="mr_men_member_gt35" class="font-weight-bold text-muted">H Adultes</label>
				<input class="form-control" type="number" data-validation="required number"  id="mr_men_member_gt35" name="mr_men_member_gt35"/>       
			</div>
			<div class="col">
				<label for="mr_women_member_lt35" class="font-weight-bold text-muted">F Jeunes</label>
				<input class="form-control" type="number" data-validation="required number"  id="mr_women_member_lt35" name="mr_women_member_lt35"/>       
			</div>
			<div class="col">
				<label for="mr_women_member_gt35" class="font-weight-bold text-muted">F Adultes</label>
				<input class="form-control" type="number" data-validation="required number"  id="mr_women_member_gt35" name="mr_women_member_gt35"/>       
			</div>
		</div>	
		<!-- Membres PVH-->
		<label for="" class="font-weight-bold">Membres - PVH</label>									
		<div class="form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="pvh_men_member_lt35" class="font-weight-bold text-muted">H Jeunes</label>
				<input class="form-control" type="number" data-validation="required number"  id="pvh_men_member_lt35" name="pvh_men_member_lt35"/>       
			</div>
			<div class="col">
				<label for="pvh_men_member_gt35" class="font-weight-bold text-muted">H Adultes</label>
				<input class="form-control" type="number" data-validation="required number"  id="pvh_men_member_gt35" name="pvh_men_member_gt35"/>       
			</div>
			<div class="col">
				<label for="pvh_women_member_lt35" class="font-weight-bold text-muted">F Jeunes</label>
				<input class="form-control" type="number" data-validation="required number"  id="pvh_women_member_lt35" name="pvh_women_member_lt35"/>       
			</div>
			<div class="col">
				<label for="pvh_women_member_gt35" class="font-weight-bold text-muted">F Adultes</label>
				<input class="form-control" type="number" data-validation="required number"  id="pvh_women_member_gt35" name="pvh_women_member_gt35"/>       
			</div>
		</div>
		<hr />
		<script>
		$(document).ready(function(){
			$('#legal_status').on('change',function(){
				var isGie = $(this).val() == "GIE";
				//SI GIE cacher CA, CS, CSP sinon affiche CA CS CSP
				if(isGie){	
					$(".member-ca input").val(0);
					$(".member-ca, .member-ca-label").hide();							
					$(".member-cs input").val(0);
					$(".member-cs, .member-cs-label").hide();							
					$(".member-csp input").val(0);
					$(".member-csp, .member-csp-label").hide();							
				}else{					
					$(".member-ca input").val('');
					$(".member-ca, .member-ca-label").show();							
					$(".member-cs input").val('');
					$(".member-cs, .member-cs-label").show();							
					$(".member-csp input").val('');
					$(".member-csp, .member-csp-label").show();					
				}
			});
		});
	</script>
		<!-- Membres Conseil d'administration -->
		<label for="" class="member-ca-label font-weight-bold">Membres Conseil d'administration</label>									
		<div class="member-ca form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="ca_men_member_lt35" class="font-weight-bold text-muted">H Jeunes</label>
				<input class="form-control" type="number" data-validation="required number"  id="ca_men_member_lt35" name="ca_men_member_lt35"/>       
			</div>
			<div class="col">
				<label for="ca_men_member_gt35" class="font-weight-bold text-muted">H Adultes</label>
				<input class="form-control" type="number" data-validation="required number"  id="ca_men_member_gt35" name="ca_men_member_gt35"/>       
			</div>
			<div class="col">
				<label for="ca_women_member_lt35" class="font-weight-bold text-muted">F Jeunes</label>
				<input class="form-control" type="number" data-validation="required number"  id="ca_women_member_lt35" name="ca_women_member_lt35"/>       
			</div>
			<div class="col">
				<label for="ca_women_member_gt35" class="font-weight-bold text-muted">F Adultes</label>
				<input class="form-control" type="number" data-validation="required number"  id="ca_women_member_gt35" name="ca_women_member_gt35"/>       
			</div>
		</div>
		<!-- Membres Conseil d'administration MR -->
		<label for="" class=" member-ca-label font-weight-bold">Membres Conseil d'administration - migrants</label>									
		<div class="member-ca form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="ca_mr_men_member_lt35" class="font-weight-bold text-muted">H Jeunes</label>
				<input class="form-control" type="number" data-validation="required number"  id="ca_mr_men_member_lt35" name="ca_mr_men_member_lt35"/>       
			</div>
			<div class="col">
				<label for="ca_mr_men_member_gt35" class="font-weight-bold text-muted">H Adultes</label>
				<input class="form-control" type="number" data-validation="required number"  id="ca_mr_men_member_gt35" name="ca_mr_men_member_gt35"/>       
			</div>
			<div class="col">
				<label for="ca_mr_women_member_lt35" class="font-weight-bold text-muted">F Jeunes</label>
				<input class="form-control" type="number" data-validation="required number"  id="ca_mr_women_member_lt35" name="ca_mr_women_member_lt35"/>       
			</div>
			<div class="col">
				<label for="ca_mr_women_member_gt35" class="font-weight-bold text-muted">F Adultes</label>
				<input class="form-control" type="number" data-validation="required number"  id="ca_mr_women_member_gt35" name="ca_mr_women_member_gt35"/>       
			</div>
		</div>	
		<!-- Membres Conseil d'administration PVH-->
		<label for="" class="member-ca-label font-weight-bold">Membres Conseil d'administration - PVH</label>									
		<div class="member-ca form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="ca_pvh_men_member_lt35" class="font-weight-bold text-muted">H Jeunes</label>
				<input class="form-control" type="number" data-validation="required number"  id="ca_pvh_men_member_lt35" name="ca_pvh_men_member_lt35"/>       
			</div>
			<div class="col">
				<label for="ca_pvh_men_member_gt35" class="font-weight-bold text-muted">H Adultes</label>
				<input class="form-control" type="number" data-validation="required number"  id="ca_pvh_men_member_gt35" name="ca_pvh_men_member_gt35"/>       
			</div>
			<div class="col">
				<label for="ca_pvh_women_member_lt35" class="font-weight-bold text-muted">F Jeunes</label>
				<input class="form-control" type="number" data-validation="required number"  id="ca_pvh_women_member_lt35" name="ca_pvh_women_member_lt35"/>       
			</div>
			<div class="col">
				<label for="ca_pvh_women_member_gt35" class="font-weight-bold text-muted">F Adultes</label>
				<input class="form-control" type="number" data-validation="required number"  id="ca_pvh_women_member_gt35" name="ca_pvh_women_member_gt35"/>       
			</div>
		</div>
	</fieldset>
