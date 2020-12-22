		<div class="modal fade" id="location_modal" tabindex="-1" role="dialog" aria-labelledby="locationModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="delete">
				<div class="modal-content">
			       <form id="location-form" action="controller.php" method="post">               
						<div class="modal-header bg-dark text-white">
							<h5 class="modal-title" id="location_modal_label">Informations Zone</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<!-- Champ PATH -->
							<input type="hidden" id="path" name="path" value="addorupdate"/>
							
							<!-- Champ id -->
			                <input type="hidden" id="id" name="id"/>      
				            
							<!-- Champ Type -->
							<div class="form-group form-input-required pb-0 pt-0 mt-0">
								<label for="type">Type</label>
								<select class="form-input form-control" id="type" name="type">
									<?php
										$types = getAttribute('types');
										foreach($types as $type){
									?>
									<option data-superior="<?= _getSuperiorTypes($type) ?>" value="<?= $type ?>"><?= getTypeDescription($type) ?></option>
									<?php
										}
									?>
								</select>
				            </div>
				            
				            <!-- Champ Nom -->
							<div class="form-group pb-0 pt-0 mt-0">
								<label for="name">Nom</label>
				                <input class="form-input form-control" type="text" id="name" name="name"/>       
				            </div>

							<!-- Champ Region -->
							<div class="form-group form-region form-unrequired pb-0 pt-0 mt-0" style="display:none">
								<label for="type">Region</label>
								<select class="form-input form-control" id="region_id" name="region_id">
									<?php
										$regions = getAttribute('regions');
										foreach($regions as $region){
									?>
									<option value="<?= $region['id'] ?>"><?= $region['name'] ?></option>
									<?php
										}
									?>
								</select>
				            </div>
			                
				            <!-- Champ Departement -->
							<div class="form-group form-department form-unrequired pb-0 pt-0 mt-0" style="display:none">
								<label for="type">Departement</label>
								<select class="form-input form-control" id="department_id" name="department_id">
									<?php
										$departments = getAttribute('departments');
										foreach($departments as $department){
									?>
									<option value="<?= $department['id'] ?>"><?= $department['name'] ?></option>
									<?php
										}
									?>
								</select>
				            </div>
														
			                <div class="form-actions form-footer form-group" id="form-action-create">
			                    <button type="submit" class="form-control btn btn-warning">ENREGISTRER</button>
			                </div>					
						</div>
			        </form>	
				</div>
			</div>
		</div>