							<!--
							Cout entretien
							-->
							<fieldset id="7">	
								<script>
/*									$(document).ready(function(){
										function calculCost(){
											var val1 = parseInt($("#grillMaintenanceCost").val());
											val1 = isNaN(val1) ? 0 : val1;											
											
											var val2 = parseInt($("#basinMaintenanceCost").val());
											val2 = isNaN(val2) ? 0 : val2;											
											
											var val3 = parseInt($("#solarMaintenanceCost").val());
											val3 = isNaN(val3) ? 0 : val3;											
											
											var val4 = parseInt($("#generatorMaintenanceCost").val());
											val4 = isNaN(val4) ? 0 : val4;											
											
											var val5 = parseInt($("#holeMaintenanceCost").val());
											val5 = isNaN(val5) ? 0 : val5;											
											
											var val6 = parseInt($("#tankMaintenanceCost").val());
											val6 = isNaN(val6) ? 0 : val6;											
											
											var val7 = parseInt($("#otherMaintenanceCost").val());
											val7 = isNaN(val7) ? 0 : val1;											

											$('#maintenanceCost').val(val1+val2+val3+val4+val5+val6+val7);
										}
										$(".ecost").on("change", calculCost);
									});
*/								</script>							
								<!-- Champ Cout entretien grillage-->
								<div class="form-row pb-0 pt-0 mt-0">
									<div class="col">
										<label for="grillMaintenanceCost">Cout Entretien cl&ocirc;ture</label>
										<input class="eCost form-control"  data-validation="required number" id="grillMaintenanceCost" name="grill_maintenance_cost" placeholder="FCFA"/>       
									</div>
								</div>									
								<!-- Champ Cout entretien bassins-->
								<div class="form-row pb-0 pt-0 mt-2">
									<div class="col">
										<label for="basinMaintenanceCost">Cout Entretien bassins</label>
										<input class="eCost form-control"  data-validation="required number" id="basinMaintenanceCost" name="basin_maintenance_cost" placeholder="FCFA"/>       
									</div>
								</div>									
								<!-- Champ Cout entretien panneaux solaires-->
								<div class="form-row pb-0 pt-1 mt-2">
									<div class="col">
										<label for="solarMaintenanceCost">Cout Entretien panneaux solaires</label>
										<input class="eCost form-control"  data-validation="required number" id="solarMaintenanceCost" name="solar_maintenance_cost" placeholder="FCFA"/>       
									</div>
								</div>									
								<!-- Champ Cout entretien groupes electriques-->
								<div class="form-row pb-0 pt-1 mt-2">
									<div class="col">
										<label for="generatorMaintenanceCost">Cout Entretien groupes &eacute;lectrog&egravenes</label>
										<input class="eCost form-control"  data-validation="required number" id="generatorMaintenanceCost" name="generator_maintenance_cost" placeholder="FCFA"/>       
									</div>
								</div>									
								<!-- Champ Cout entretien puits-->
								<div class="form-row pb-0 pt-1 mt-2">
									<div class="col">
										<label for="holeMaintenanceCost">Cout Entretien puits</label>
										<input class="eCost form-control"  data-validation="required number" id="holeMaintenanceCost" name="hole_maintenance_cost" placeholder="FCFA"/>       
									</div>
								</div>									
								<!-- Champ Cout Reservoir au sol-->
								<div class="form-row pb-0 pt-0 mt-2">
									<div class="col">
										<label for="tankMaintenanceCost">Cout Entretien r&eacute;servoirs</label>
										<input class="eCost form-control"  data-validation="required number" id="tankMaintenanceCost" name="tank_maintenance_cost" placeholder="FCFA"/>       
									</div>
								</div>									
								<!-- Champ Cout tuyauterie, robinet et compteur-->
								<div class="form-row pb-0 pt-0 mt-2">
									<div class="col">
										<label for="plumbingMaintenanceCost">Cout Entretien tuyauterie, robinet et compteur</label>
										<input class="eCost form-control"  data-validation="required number" id="plumbingMaintenanceCost" name="plumbing_maintenance_cost" placeholder="FCFA"/>       
									</div>
								</div>
								<!-- Champ Cout entretien batiment-->
								<div class="form-row pb-0 pt-0 mt-2">
									<div class="col">
										<label for="buildingMaintenanceCost">Cout Entretien b&agrave;timent</label>
										<input class="eCost form-control"  data-validation="required number" id="building_maintenance_cost" name="building_maintenance_cost" placeholder="FCFA"/>       
									</div>
								</div>
								<!-- Champ Cout entretien materiel agricole-->
								<div class="form-row pb-0 pt-0 mt-2">
									<div class="col">
										<label for="agricultureEquipmentMaintenanceCost">Cout Entretien mat&eacute;riel agricole</label>
										<input class="eCost form-control"  data-validation="required number" id="agriculture_equipment_maintenance_cost" name="agriculture_equipment_maintenance_cost" placeholder="FCFA"/>       
									</div>
								</div>
								<!-- Champ Cout entretien animaux-->
								<div class="form-row pb-0 pt-0 mt-2">
									<div class="col">
										<label for="animalMaintenanceCost">Cout Entretien animaux &agrave; usage agricole</label>
										<input class="eCost form-control"  data-validation="required number" id="animal_maintenance_cost" name="animal_maintenance_cost" placeholder="FCFA"/>       
									</div>
								</div>
								<!-- Champ Cout entretien forage-->
								<div class="form-row pb-0 pt-0 mt-2">
									<div class="col">
										<label for="forageMaintenanceCost">Cout Entretien forage</label>
										<input class="eCost form-control"  data-validation="required number" id="forageMaintenanceCost" name="forage_maintenance_cost" placeholder="FCFA"/>       
									</div>
								</div>
								<!-- Chanps Autres entretiens -->
								<div class="form-row pb-0 pt-1 mt-2">
									<div class="col">
										<label for="eCost otherMaintenanceCost">Autres couts</label>
										<input class="form-control"  data-validation="required number" id="otherMaintenanceCost" name="other_maintenance_cost" data-sanitize="numberFormat"  data-sanitize-number-format="0,0" placeholder="FCFA"/>       
									</div>
									<div class="col">
										<label for="otherMaintenanceCostDescription">A pr&eacute;ciser</label>
										<input class="form-control" type="text" id="otherMaintenanceCostDescription" name="other_maintenance_cost_description" placeholder=""/>       
									</div>
								</div>								
								<!-- Champ cout tolal
								<div class="form-row pb-0 pt-1 mt-2">
									<div class="col">
										<label for="maintenanceCost">Cout des entretiens & maintenances</label>
										<input class="bg-danger text-white form-control"  data-validation="required number" id="maintenanceCost" name="maintenance_cost" disabled/>       
									</div>
								</div>	-->
							</fieldset>	