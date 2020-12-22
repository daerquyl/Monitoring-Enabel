		<div class="modal fade" id="site_modal" tabindex="-1" role="dialog" aria-labelledby="siteModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="delete">
				<div class="modal-content">
			       <form id="site-form" action="controller.php" method="post">               
						<div class="modal-header bg-dark text-white">
							<h5 class="modal-title" id="site_modal_label">Informations site</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<!-- Champ PATH -->
							<input type="hidden" id="path" name="path" value="addorupdate"/>
							
							<!-- Champ id -->
			                <input type="hidden" id="id" name="id"/>     
							
							<!-- Champ Nom Site -->
							<div class="form-group form-input-required pb-0 pt-0 mt-0">
								<label for="name" class="font-weight-bold">Site</label>
								<input class="form-control" type="text" id="name" name="name"/>       
							</div>		

							<!-- Champ Commune -->
							<div class="form-group pb-0 pt-0 mt-0">
								<label for="commune_id" class="font-weight-bold">Commune</label>
								<select class="form-control" id="commune_id" name="commune_id">
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
																
							<!-- Champ Coordonne geographique -->
							<label for="" class="font-weight-bold">Coordonnees Geographiques</label>
							<div class="form-row pb-0 pt-0 mt-0">
								<div class="col">
									<input class="form-control" type="text" id="latitude" name="latitude" placeholder="Latitude"/>       
								</div>
								<div class="col">
									<input class="form-control" type="text" id="longitude" name="longitude" placeholder="Longitude"/>       
								</div>
							</div>																
			                <div class="form-actions form-footer form-group  mt-4" id="form-action-create">
			                    <button type="submit" class="form-control btn btn-warning">ENREGISTRER</button>
			                </div>					
						</div>
			        </form>	
				</div>
			</div>
		</div>