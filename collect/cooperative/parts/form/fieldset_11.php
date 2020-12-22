	<!--  
	Activites - Entretien
	-->
	<fieldset id="11">
			<!-- Champ Quantite d'eau distribuee-->
		<div class="form-row pb-0 pt-0 mt-2">
			<div class="col">
				<label for="water_quantity">Quantite d'eau distribu&eacute;e</label>
				<input class="eCost form-control" type="number" data-validation="required number" id="water_quantity" name="water_quantity" placeholder="m3"/>       
			</div>
		</div>
		<!-- Champ Prix du m3 d'eau-->
		<div class="form-row pb-0 pt-0 mt-2">
			<div class="col">
				<label for="water_cost_m3">Prix m3 eau</label>
				<input class="eCost form-control" type="number" data-validation="required number" id="water_cost_m3" name="water_cost_m3" placeholder="FCFA"/>       
			</div>
		</div>
		<!-- Champ Cout entretien grillage-->
		<div class="form-row pb-0 pt-0 mt-0">
			<div class="col">
				<label for="grill_aintenanceCost">Cout Entretien cl&ocirc;ture</label>
				<input class="eCost form-control" type="number" data-validation="required number" id="grill_maintenance_cost" name="grill_maintenance_cost" placeholder="FCFA"/>       
			</div>
		</div>									
		<!-- Champ Cout entretien bassins-->
		<div class="form-row pb-0 pt-0 mt-2">
			<div class="col">
				<label for="basin_maintenance_cost">Cout Entretien bassins</label>
				<input class="eCost form-control" type="number" data-validation="required number" id="basin_maintenance_cost" name="basin_maintenance_cost" placeholder="FCFA"/>       
			</div>
		</div>									
		<!-- Champ Cout entretien panneaux solaires-->
		<div class="form-row pb-0 pt-1 mt-2">
			<div class="col">
				<label for="solar_maintenance_cost">Cout Entretien panneaux solaires</label>
				<input class="eCost form-control" type="number" data-validation="required number" id="solar_maintenance_cost" name="solar_maintenance_cost" placeholder="FCFA"/>       
			</div>
		</div>									
		<!-- Champ Cout entretien groupes electriques-->
		<div class="form-row pb-0 pt-1 mt-2">
			<div class="col">
				<label for="generator_maintenance_cost">Cout Entretien groupes &eacute;lectrog&egravenes</label>
				<input class="eCost form-control" type="number" data-validation="required number" id="generator_maintenance_cost" name="generator_maintenance_cost" placeholder="FCFA"/>       
			</div>
		</div>									
		<!-- Champ Cout entretien puits-->
		<div class="form-row pb-0 pt-1 mt-2">
			<div class="col">
				<label for="hole_maintenance_cost">Cout Entretien puits</label>
				<input class="eCost form-control" type="number" data-validation="required number" id="hole_maintenance_cost" name="hole_maintenance_cost" placeholder="FCFA"/>       
			</div>
		</div>									
		<!-- Champ Cout Reservoir au sol-->
		<div class="form-row pb-0 pt-0 mt-2">
			<div class="col">
				<label for="tank_maintenance_cost">Coût Entretien r&eacute;servoirs</label>
				<input class="eCost form-control" type="number" data-validation="required number" id="tank_maintenance_cost" name="tank_maintenance_cost" placeholder="FCFA"/>       
			</div>
		</div>									
		<!-- Cout entretien reseau d'irrigation-->
		<div class="form-row pb-0 pt-0 mt-2">
			<div class="col">
				<label for="irrigation_network_cost">Coût entretien tuyauterie, robinet et compteur</label>
				<input class="eCost form-control" type="number" data-validation="required number" id="irrigation_network_cost" name="irrigation_network_cost" placeholder="FCFA"/>       
			</div>
		</div>	
		<!-- Champ Cout entretien batiment-->
		<div class="form-row pb-0 pt-0 mt-2">
			<div class="col">
				<label for="buildingMaintenanceCost">Coût Entretien b&agrave;timent</label>
				<input class="eCost form-control" type="number" data-validation="required number" id="building_maintenance_cost" name="building_maintenance_cost" placeholder="FCFA"/>       
			</div>
		</div>
		<!-- Champ Cout entretien materiel agricole-->
		<div class="form-row pb-0 pt-0 mt-2">
			<div class="col">
				<label for="agricultureEquipmentMaintenanceCost">Cout Entretien mat&eacute;riel agricole</label>
				<input class="eCost form-control" type="number" data-validation="required number" id="agriculture_equipment_maintenance_cost" name="agriculture_equipment_maintenance_cost" placeholder="FCFA"/>       
			</div>
		</div>
		<!-- Champ Cout entretien animaux-->
		<div class="form-row pb-0 pt-0 mt-2">
			<div class="col">
				<label for="animalMaintenanceCost">Cout Entretien animaux &agrave; usage agricole</label>
				<input class="eCost form-control" type="number" data-validation="required number" id="animal_maintenance_cost" name="animal_maintenance_cost" placeholder="FCFA"/>       
			</div>
		</div>		
		<!-- Chanps Autres entretiens -->
		<div class="form-row pb-0 pt-1 mt-2">
			<div class="col">
				<label for="eCost other_maintenance_cost">Autres couts</label>
				<input class="form-control" type="number" data-validation="required number" id="other_maintenance_cost" name="other_maintenance_cost" placeholder="FCFA"/>       
			</div>
			<div class="col">
				<label for="other_maintenance_cost_Description">A pr&eacute;ciser</label>
				<input class="form-control" type="text" id="other_maintenance_cost_Description" name="other_maintenance_cost_description" placeholder=""/>       
			</div>
		</div>	
	</fieldset>
