	<!--  
	Gouvernance CS / BE
	-->
	<fieldset id="9">
		<!-- Nombre d'CS Prevue / Realises-->
		<label for="" class="member-cs-label font-weight-bold">Nombre de conseil de surveillance</label>									
		<div class="member-cs form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="expected_cs">Pr&eacute;vu</label>
				<input class="form-control" type="number" data-validation="required number" id="expected_cs" name="expected_cs" />       
			</div>
			<div class="col">
				<label for="real_cs">R&eacute;alis&eacute;</label>
				<input class="form-control" type="number" data-validation="required number" id="real_cs" name="real_cs"/>       
			</div>
			<div class="col">
				<label for="pv_cs">PV Disponibles</label>
				<input class="form-control" type="number" data-validation="required number pv_check" id="pv_cs" name="pv_cs"/>       
			</div>
		</div>	
		<!-- Participants CS-->
		<label for="" class="member-cs-label font-weight-bold">Taux de participants CS</label>									
		<div class="member-cs form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="cs_men_participant_lt35" class="font-weight-bold text-muted">H Jeunes</label>
				<input required class="form-control" type="number" data-validation="required number" id="cs_men_participant_lt35" name="cs_men_participant_lt35"/>       
			</div>
			<div class="col">
				<label for="cs_men_participant_gt35" class="font-weight-bold text-muted">H Adultes</label>
				<input required class="form-control" type="number" data-validation="required number" id="cs_men_participant_gt35" name="cs_men_participant_gt35"/>       
			</div>
			<div class="col">
				<label for="cs_women_participant_lt35" class="font-weight-bold text-muted">F Jeunes</label>
				<input required class="form-control" type="number" data-validation="required number" id="cs_women_participant_lt35" name="cs_women_participant_lt35"/>       
			</div>
			<div class="col">
				<label for="cs_women_participant_gt35" class="font-weight-bold text-muted">F Adultes</label>
				<input required class="form-control" type="number" data-validation="required number" id="cs_women_participant_gt35" name="cs_women_participant_gt35"/>       
			</div>
		</div>
		<!-- Participants CS MR -->
		<label for="" class="member-cs-label font-weight-bold">Taux de participants CS - migrants</label>									
		<div class="member-cs form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="cs_mr_men_participant_lt35" class="font-weight-bold text-muted">H Jeunes</label>
				<input required class="form-control" type="number" data-validation="required number" id="cs_mr_men_participant_lt35" name="cs_mr_men_participant_lt35"/>       
			</div>
			<div class="col">
				<label for="cs_mr_men_participant_gt35" class="font-weight-bold text-muted">H Adultes</label>
				<input required class="form-control" type="number" data-validation="required number" id="cs_mr_men_participant_gt35" name="cs_mr_men_participant_gt35"/>       
			</div>
			<div class="col">
				<label for="cs_mr_women_participant_lt35" class="font-weight-bold text-muted">F Jeunes</label>
				<input required class="form-control" type="number" data-validation="required number" id="cs_mr_women_participant_lt35" name="cs_mr_women_participant_lt35"/>       
			</div>
			<div class="col">
				<label for="cs_mr_women_participant_gt35" class="font-weight-bold text-muted">F Adultes</label>
				<input required class="form-control" type="number" data-validation="required number" id="cs_mr_women_participant_gt35" name="cs_mr_women_participant_gt35"/>       
			</div>
		</div>	
		<!-- Participants CS PVH-->
		<label for="" class="member-cs-label font-weight-bold">Taux de participants CS - PVH</label>									
		<div class="member-cs form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="cs_pvh_men_participant_lt35" class="font-weight-bold text-muted">H Jeunes</label>
				<input required class="form-control" type="number" data-validation="required number" id="cs_pvh_men_participant_lt35" name="cs_pvh_men_participant_lt35"/>       
			</div>
			<div class="col">
				<label for="cs_pvh_men_participant_gt35" class="font-weight-bold text-muted">H Adultes</label>
				<input required class="form-control" type="number" data-validation="required number" id="cs_pvh_men_participant_gt35" name="cs_pvh_men_participant_gt35"/>       
			</div>
			<div class="col">
				<label for="cs_pvh_women_participant_lt35" class="font-weight-bold text-muted">F Jeunes</label>
				<input required class="form-control" type="number" data-validation="required number" id="cs_pvh_women_participant_lt35" name="cs_pvh_women_participant_lt35"/>       
			</div>
			<div class="col">
				<label for="cs_pvh_women_participant_gt35" class="font-weight-bold text-muted">F Adultes</label>
				<input required class="form-control" type="number" data-validation="required number" id="cs_pvh_women_participant_gt35" name="cs_pvh_women_participant_gt35"/>       
			</div>
		</div>
		<hr />
		<!-- Nombre BE Prevue / Realises-->
		<label for="" class="font-weight-bold">Nombre de r&eacute;union BE</label>									
		<div class="form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="expected_be">Pr&eacute;vu</label>
				<input class="form-control" type="number" data-validation="required number" id="expected_be" name="expected_be" />       
			</div>
			<div class="col">
				<label for="real_be">R&eacute;alis&eacute;</label>
				<input class="form-control" type="number" data-validation="required number" id="real_be" name="real_be"/>       
			</div>
			<div class="col">
				<label for="pv_be">PV Disponibles</label>
				<input class="form-control" type="number" data-validation="required number pv_check" id="pv_be" name="pv_be"/>       
			</div>
		</div>	
		<!-- Participants BE-->
		<label for="" class="font-weight-bold">Taux de participants BE</label>									
		<div class="form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="be_men_participant_lt35" class="font-weight-bold text-muted">H Jeunes</label>
				<input required class="form-control" type="number" data-validation="required number" id="be_men_participant_lt35" name="be_men_participant_lt35"/>       
			</div>
			<div class="col">
				<label for="be_men_participant_gt35" class="font-weight-bold text-muted">H Adultes</label>
				<input required class="form-control" type="number" data-validation="required number" id="be_men_participant_gt35" name="be_men_participant_gt35"/>       
			</div>
			<div class="col">
				<label for="be_women_participant_lt35" class="font-weight-bold text-muted">F Jeunes</label>
				<input required class="form-control" type="number" data-validation="required number" id="be_women_participant_lt35" name="be_women_participant_lt35"/>       
			</div>
			<div class="col">
				<label for="be_women_participant_gt35" class="font-weight-bold text-muted">F Adultes</label>
				<input required class="form-control" type="number" data-validation="required number" id="be_women_participant_gt35" name="be_women_participant_gt35"/>       
			</div>
		</div>
		<!-- Participants BE MR -->
		<label for="" class="font-weight-bold">Taux de participants BE - migrants</label>									
		<div class="form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="be_mr_men_participant_lt35" class="font-weight-bold text-muted">H Jeunes</label>
				<input required class="form-control" type="number" data-validation="required number" id="be_mr_men_participant_lt35" name="be_mr_men_participant_lt35"/>       
			</div>
			<div class="col">
				<label for="be_mr_men_participant_gt35" class="font-weight-bold text-muted">H Adultes</label>
				<input required class="form-control" type="number" data-validation="required number" id="be_mr_men_participant_gt35" name="be_mr_men_participant_gt35"/>       
			</div>
			<div class="col">
				<label for="be_mr_women_participant_lt35" class="font-weight-bold text-muted">F Jeunes</label>
				<input required class="form-control" type="number" data-validation="required number" id="be_mr_women_participant_lt35" name="be_mr_women_participant_lt35"/>       
			</div>
			<div class="col">
				<label for="be_mr_women_participant_gt35" class="font-weight-bold text-muted">F Adultes</label>
				<input required class="form-control" type="number" data-validation="required number" id="be_mr_women_participant_gt35" name="be_mr_women_participant_gt35"/>       
			</div>
		</div>	
		<!-- Participants BE PVH-->
		<label for="" class="font-weight-bold">Participants BE - PVH</label>									
		<div class="form-row pb-0 pt-0 mt-0 mb-3">
			<div class="col">
				<label for="be_pvh_men_participant_lt35" class="font-weight-bold text-muted">H Jeunes</label>
				<input required class="form-control" type="number" data-validation="required number" id="be_pvh_men_participant_lt35" name="be_pvh_men_participant_lt35"/>       
			</div>
			<div class="col">
				<label for="be_pvh_men_participant_gt35" class="font-weight-bold text-muted">H Adultes</label>
				<input required class="form-control" type="number" data-validation="required number" id="be_pvh_men_participant_gt35" name="be_pvh_men_participant_gt35"/>       
			</div>
			<div class="col">
				<label for="be_pvh_women_participant_lt35" class="font-weight-bold text-muted">F Jeunes</label>
				<input required class="form-control" type="number" data-validation="required number" id="be_pvh_women_participant_lt35" name="be_pvh_women_participant_lt35"/>       
			</div>
			<div class="col">
				<label for="be_pvh_women_participant_gt35" class="font-weight-bold text-muted">F Adultes</label>
				<input required class="form-control" type="number" data-validation="required number" id="be_pvh_women_participant_gt35" name="be_pvh_women_participant_gt35"/>       
			</div>
		</div>	
	</fieldset>
