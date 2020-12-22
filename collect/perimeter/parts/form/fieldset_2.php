							<!--
							Amenagements hydroagricoles
							-->
							<fieldset id="2">	
								<script>
									$(document).ready(function(){
										$("#ti_other").on("change",function(){
											if($(this).prop('checked')){
												$("#other_irrigation_type").parent().show();
											}else{
												$("#other_irrigation_type").parent().hide();
											}
										});									
									});
								</script>
								<!-- Champ Type d'irrigation -->
								<div class="form-group pb-0 pt-0 mt-0 multiple">
									<label for="irrigationType" class="font-weight-bold">Type d'irrigation</label>
									<input type="text" class="form-control d-none input" data-target="ti" id="irrigation_type" name="irrigation_type" data-validation="required"/>
									<div class="checkboxes_container">
										<div class="form-group"><input type="checkbox" class="multiple-checkbox ti" value="Neant"><label> N&eacute;ant</label></div>
										<div class="form-group"><input type="checkbox" class="multiple-checkbox ti" value="GANDIOLAIS"><label> Gandiolais</label></div>
										<div class="form-group"><input type="checkbox" class="multiple-checkbox ti" value="CALIFORNIEN"><label> Californien</label></div>
										<div class="form-group"><input type="checkbox" class="multiple-checkbox ti" value="GOUTTE A GOUTTE"><label> Goutte &agrave goutte</label></div>
										<div class="form-group"><input type="checkbox" class="multiple-checkbox ti" value="ASPERSION"><label> Aspersion</label></div>
										<div class="form-group"><input type="checkbox" class="multiple-checkbox ti" id="ti_other" value="AUTRE"><label> Autre</label></div>
									</div>
								</div>	
								
								<!-- Autre type d'irrigation -->
								<div class="form-group pb-0 pt-0 mt-0" style="display:none">
									<label for="other_irrigation_type" class="font-weight-bold">Autre type d'irrigation</label>
									<input class="form-control" type="text" id="other_irrigation_type" name="other_irrigation_type"/>       
								</div>

								<!-- Champ Forages -->
								<label for="" class="font-weight-bold">Nombre de sources d'eau</label>									
								<div class="form-row pb-0 pt-0 mt-0">
									<div class="col">
										<label for="holes">Puits/C&eacute;ane</label>
										<input class="form-control"  data-validation="required number"  id="holes" name="holes" placeholder=""/>       
									</div>
									<div class="col">
										<label for="forages">Forages</label>
										<input class="form-control"  data-validation="required number"  id="forages" name="forages" placeholder=""/>       
									</div>
									<div class="col">
										<label for="basins">Bassins</label>
										<input class="form-control"  data-validation="required number"  id="basins" name="basins" placeholder=""/>       
									</div>
									<div class="col">
										<label for="taps">Robinets</label>
										<input class="form-control"  data-validation="required number"  id="taps" name="taps" placeholder=""/>       
									</div>
								</div>	
								<div class="form-row pb-0 pt-0 mt-0">
									<div class="col">
										<!-- Champ profondeur moyenne source d'eau -->
										<br /><label for="waterMoyDeep" class="font-weight-bold">Profondeur Moyenne</label>
										<input class="form-control" data-validation="number" data-validation-optional="true" data-validation-allowing="float" id="waterMoyDeep" name="water_moy_deep" placeholder="m"/>       
									</div>
									<div class="col">
										<br /><label for="waterDebit" class="font-weight-bold">D&eacute;bit d'exploitation</label>
										<input class="form-control"  data-validation="number" data-validation-optional="true" data-validation-allowing="float" id="waterDebit" name="water_debit" placeholder="m3/h"/>       
									</div>		
								</div>										
								<!-- Champ Nombres de pompes -->
								<br /><label for="" class="font-weight-bold">Nombre de pompes</label>									
								<div class="form-row pb-0 pt-0 mt-0">
									<div class="col">
										<label for="motoPumps">Moto pompes</label>
										<input class="form-control"  data-validation="required number" id="motoPumps" name="moto_pumps" placeholder=""/>       
									</div>
									<div class="col">
										<label for="solarPumps">Pompes solaires</label>
										<input class="form-control"  data-validation="required number" id="solarPumps" name="solar_pumps" placeholder=""/>       
									</div>		
								</div>							

								<!-- Champ Source d'energie -->
								<div class="form-group pb-0 pt-0 mt-0">
									<br /><label for="energyType" class="font-weight-bold">Source d'&eacute;nergie d'exhaure</label>
									<select class="form-control" id="energyType" name="energy_type" data-validation="non_empty_select">
										<option value="-">-</option>
										<option value="NA">N/A</option>
										<option value="SOLAIRE">Solaire</option>
										<option value="GROUPE ELECTROGENE">Groupe &eacute;lectrog&egrave;ne</option>
										<option value="SENELEC">SENELEC</option>
										<option value="MANUEL">MANUEL</option>
										<option value="MIXTE">Mixte</option>
									</select>
								</div>
								<!-- Champ Puissance energie -->
								<label for="" class="font-weight-bold">Puissance source d'&eacute;nergie</label>									
								<div class="form-row pb-0 pt-0 mt-0">
									<div class="col">
										<input class="form-control" data-validation-optional="true" data-validation="number" data-validation-allowing="float" id="energyPowerKW" name="energy_powerkw" placeholder="KW"/>       
									</div>
									<div class="col">
										<input class="form-control" data-validation-optional="true" data-validation="number" data-validation-allowing="float" id="energyPowerKVA" name="energy_powerkva" placeholder="KVA"/>       
									</div>		
								</div>	

								<!-- Champ Longueur des canalisations -->
								<br /><label for="" class="font-weight-bold">Longueur canalisation / cl&ocirc;ture / Haie vive</label>									
								<div class="form-row pb-0 pt-0 mt-0">
									<div class="col">
										<label for="lengthPiping">Canalisation</label>
										<input class="form-control"  data-validation="required number" data-validation-allowing="float" id="lengthPiping" name="length_piping" placeholder="m"/>       
									</div>
									<div class="col">
										<label for="lengthFences">Cloture</label>
										<input class="form-control"  data-validation="required number" data-validation-allowing="float" id="lengthFences" name="length_fences" placeholder="m"/>       
									</div>		
									<div class="col">
										<label for="length_hedges">Haie Vive</label>
										<input class="form-control"  data-validation="required number" data-validation-allowing="float" id="length_hedges" name="length_hedges" placeholder="m"/>       
									</div>		
								</div>
								<br />									
								<div class="form-row pb-0 pt-0 mt-0">
									<label for="totalHa" class="font-weight-bold">Superficie Totale</label>
									<input class="form-control"  data-validation="required number not_0" data-validation-allowing="float" id="totalHa" name="total_ha" placeholder="ha"/>       
								</div>									
								<div class="form-row pb-0 pt-0 mt-0">
									<label for="totalHaIrrigated" class="font-weight-bold">Superficie fonctionnelle</label>
									<input class="form-control"  data-validation="required number superficie_check" data-validation-allowing="float" id="totalHaIrrigated" name="total_ha_irrigated" placeholder="ha"/>       
								</div>	
								<br />								
								<div class="form-row pb-0 pt-0 mt-0">
									<label for="plots" class="font-weight-bold">Nombre de parcelles</label>
									<input class="form-control"  data-validation="required number"  id="plots" name="plots" placeholder=""/>       
								</div>
								<br />									
								<div class="form-row pb-0 pt-0 mt-0">
									<label for="plotMoyArea" class="font-weight-bold">Superficie moyenne des parcelles</label>
									<input class="form-control"  data-validation="required number not_0" data-validation-allowing="float" id="plotMoyArea" name="plot_moy_area" placeholder="m2"/>       
								</div>									
							</fieldset>
