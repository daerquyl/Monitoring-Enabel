	<!--
	Location
	-->
	<fieldset id="1" class="active">							
		<!-- Champ PATH -->
		<input type="hidden" id="path" name="path" value="addorupdate"/>

		<!-- Champ type collect -->
		<input type="hidden" id="record" name="record" value="enterprise"/>
		
		<!-- Champ id -->
		<input type="hidden" id="id" name="id"/>         

		<!-- Champ collect id -->
		<input type="hidden" id="collect_id" name="collect_id"/>     
		
		<!-- Champ Nom Site 
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="site_id" class="font-weight-bold">Site</label>
			<select class="form-control" id="site_id" name="site_id"
				data-validation="non_empty_select">
				<option value="-">-</option>
				<?php
				$sites = getSites();
				foreach($sites as $site){
				?>
				<option data-commune="<?= $site['commune_id'] ?>" 
						value="<?= $site['id'] ?>">
						<?= $site['name'] ?>
				</option>
				<?php
					}
				?>
			</select>
		</div>-->

		<!-- Champ Commune -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="commune_id" class="font-weight-bold">Commune</label>
			<select class="form-control" id="commune_id" name="commune_id"
				data-validation="non_empty_select">
				<option value="-">-</option>
				<?php
				$communes = getCommunes();
				foreach($communes as $commune){
				?>
				<option data-department="<?= $commune['department_id'] ?>" 
						value="<?= $commune['id'] ?>">
						<?= $commune['name'] ?>
				</option>
				<?php
					}
				?>
			</select>
		</div>

		<!-- Champ Departement -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="department_id" class="font-weight-bold">D&eacute;partement</label>
			<select class="form-control" id="department_id" name="department_id" readonly>
				<option value="-">-</option>
				<?php
				$departments = getDepartments();
				foreach($departments as $department){
				?>
				<option data-region="<?= $department['region_id'] ?>" 
						value="<?= $department['id'] ?>">
						<?= $department['name'] ?>
				</option>
				<?php
					}
				?>
			</select>
		</div>
		
		<!-- Champ Region -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="region_id" class="font-weight-bold">R&eacute;gion</label>
			<select class="form-control" id="region_id" name="region_id" readonly>
				<option value="-">-</option>
				<?php
				$regions = getRegions();
				foreach($regions as $region){
				?>
				<option value="<?= $region['id'] ?>">
						<?= $region['name'] ?>
				</option>
				<?php
				}
				?>
			</select>
		</div>							
	</fieldset>
