							<!--
							Details de l'exploitation 1
							-->
							<fieldset id="3">								
								<!-- Periode de rapportage -->																
								<div class="form-group pb-0 pt-0 mt-0">
									<label for="reporting_period" class="font-weight-bold">P&eacute;riode de rapportage</label>
									<select class="form-control" id="reporting_period" name="reporting_period"
									data-validation="non_empty_select">
										<option value="-"> - </option>
										<option value="CSF">CSF</option>
										<option value="CSC">CSC</option>
										<option value="HIV">HIV</option>
									</select>
								</div>	
								<!-- Champ Nombre Hectares Juridiquement Securise -->
								<div class="form-row pb-0 pt-0 mt-2">
									<label for="totalHaLegallySecured" class="font-weight-bold">Superficie d&eacute;lib&eacute;r&eacute;e</label>
									<input class="form-control"  data-validation="required number superficie_check" data-validation-allowing="float" id="totalHaLegallySecured" name="total_ha_legally_secured" placeholder="ha"/>       
								</div>									
								<!-- Champ Nombre Hectares clotures-->
								<div class="form-row pb-0 pt-0 mt-2">
									<label for="total_ha_fenced" class="font-weight-bold">Superficie cl&ocirc;tur&eacute;e</label>
									<input class="form-control"  data-validation="required number superficie_check" data-validation-allowing="float" id="total_ha_fenced" name="total_ha_fenced" placeholder="ha"/>       
								</div>	
								<!-- Champ Nombre Hectares en exploitation-->
								<br /><label for="" class="font-weight-bold">Superficie en exploitation par</label>									
								<br /><label for="" class="font-weight-bold">Jeunes Hommes 15-35 ans</label>									
								<div class="form-row pb-0 pt-0 mt-0">
									<div class="col">
										<label for="total_ha_running_men_lt35">Hommes</label>
										<input class="form-control running_ha"  data-validation="required number" data-validation-allowing="float" id="total_ha_running_men_lt35" name="total_ha_running_men_lt35" placeholder="ha"/>       
									</div>
									<div class="col">
										<label for="total_ha_running_pvh_men_lt35">Handicap&eacute;s</label>
										<input class="form-control running_ha"  data-validation="required number" data-validation-allowing="float" id="total_ha_running_pvh_men_lt35" name="total_ha_running_pvh_men_lt35" placeholder="ha"/>       
									</div>
									<div class="col">
										<label for="total_ha_running_mr_men_lt35">Migrants</label>
										<input class="form-control running_ha"  data-validation="required number" data-validation-allowing="float" id="total_ha_running_mr_men_lt35" name="total_ha_running_mr_men_lt35" placeholder="ha"/>       
									</div>
								</div>		
								<br /><label for="" class="font-weight-bold">Hommes +35 ans</label>									
								<div class="form-row pb-0 pt-0 mt-0">
									<div class="col">
										<label for="total_ha_running_men_gt35">Hommes</label>
										<input class="form-control running_ha"  data-validation="required number" data-validation-allowing="float" id="total_ha_running_men_gt35" name="total_ha_running_men_gt35" placeholder="ha"/>       
									</div>
									<div class="col">
										<label for="total_ha_running_pvh_men_gt35">Handicap&eacute;s</label>
										<input class="form-control running_ha"  data-validation="required number" data-validation-allowing="float" id="total_ha_running_pvh_men_gt35" name="total_ha_running_pvh_men_gt35" placeholder="ha"/>       
									</div>
									<div class="col">
										<label for="total_ha_running_mr_men_gt35">Migrants</label>
										<input class="form-control running_ha"  data-validation="required number" data-validation-allowing="float" id="total_ha_running_mr_men_gt35" name="total_ha_running_mr_men_gt35" placeholder="ha"/>       
									</div>
								</div>		
								<br /><label for="" class="font-weight-bold">Jeunes Femmes 15-35 ans</label>									
								<div class="form-row pb-0 pt-0 mt-0">
									<div class="col">
										<label for="total_ha_running_women_lt35">Femmes</label>
										<input class="form-control running_ha"  data-validation="required number" data-validation-allowing="float" id="total_ha_running_women_lt35" name="total_ha_running_women_lt35" placeholder="ha"/>       
									</div>
									<div class="col">
										<label for="total_ha_running_pvh_women_lt35">Handicap&eacute;s</label>
										<input class="form-control running_ha"  data-validation="required number" data-validation-allowing="float" id="total_ha_running_pvh_women_lt35" name="total_ha_running_pvh_women_lt35" placeholder="ha"/>       
									</div>
									<div class="col">
										<label for="total_ha_running_mr_women_lt35">Migrants</label>
										<input class="form-control running_ha"  data-validation="required number" data-validation-allowing="float" id="total_ha_running_mr_women_lt35" name="total_ha_running_mr_women_lt35" placeholder="ha"/>       
									</div>
								</div>		
								<br /><label for="" class="font-weight-bold">Femme +35 ans</label>									
								<div class="form-row pb-0 pt-0 mt-0">
									<div class="col">
										<label for="total_ha_running_women_gt35">Femmes</label>
										<input class="form-control running_ha"  data-validation="required number" data-validation-allowing="float" id="total_ha_running_women_gt35" name="total_ha_running_women_gt35" placeholder="ha"/>       
									</div>
									<div class="col">
										<label for="total_ha_running_pvh_women_gt35">Handicap&eacute;s</label>
										<input class="form-control running_ha"  data-validation="required number" data-validation-allowing="float" data-validation-allowing="float" id="total_ha_running_pvh_women_gt35" name="total_ha_running_pvh_women_gt35" placeholder="ha"/>       
									</div>
									<div class="col">
										<label for="total_ha_running_mr_women_gt35">Migrants</label>
										<input class="form-control running_ha"  data-validation="required number" data-validation-allowing="float" id="total_ha_running_mr_women_gt35" name="total_ha_running_mr_women_gt35" placeholder="ha"/>       
									</div>
								</div>		
							</fieldset>	
