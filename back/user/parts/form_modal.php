		<div class="modal fade" id="user_modal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="delete">
				<div class="modal-content">
			       <form id="user-form" action="controller.php" method="post">               
						<div class="modal-header bg-dark text-white">
							<h5 class="modal-title" id="user_modal_label">Informations  utilisateur</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<!-- Champ id -->
			                <input type="hidden" id="id" name="id"/> <br />
			                       
							<!-- Champ PATH -->
							<input type="hidden" id="path" name="path" value="addorupdate"/>

							<!-- Champ Role -->
							<div class="form-group pb-0 pt-0 mt-0">
								<label for="type">Role</label>
								<select class="form-input form-control" id="role" name="role">
									<?php
										$roles = getAttribute('roles');
										foreach($roles as $role){
									?>
											<option data-superior="<?= _getSuperiorRoles($role) ?>" value="<?= $role ?>"><?= _getRoleDescription($role) ?></option>
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
				            
				            <!-- Champ Login -->
							<div class="form-group pb-0 pt-0 mt-0">
								<label for="name">Nom d'utilisateur</label>
				                <input class="form-input form-control" type="text" id="login" name="login"/>       
				            </div>

				            <!-- Champ Email -->
							<div class="form-group pb-0 pt-0 mt-0">
								<label for="name">Email</label>
				                <input class="form-input form-control" type="text" id="email" name="email"/>       
				            </div>
				            
				            <!-- Champ Organisation -->
							<div class="form-group form-organization form-unrequired pb-0 pt-0 mt-0"  style="display:none">
								<label for="organization_id">Organisation</label>
								<select class="form-input form-control" id="organization_id" name="organization_id">
									<?php
										$organizations = getAttribute('organizations');
										foreach($organizations as $organization){
									?>
											<option data-name="<?= $organization['name'] ?>" value="<?= $organization['id'] ?>"><?= $organization['name'] ?></option>
									<?php
										}
									?>
								</select>
				            </div>
							
				            <!-- Champ Superviseur -->
							<div class="form-group form-supervisor form-unrequired pb-0 pt-0 mt-0" style="display:none">
								<label for="supervisor_id"><?= getRoleDescription("SUPERVISOR") ?></label>
								<select class="form-input form-control" id="supervisor_id" name="supervisor_id">
									<?php
										$supervisors = getAttribute('supervisors');
										foreach($supervisors as $supervisor){
									?>
											<option value="<?= $supervisor['id'] ?>"><?= $supervisor['name'] ?></option>
									<?php
										}
									?>
								</select>
				            </div>	
							
							<!-- Champ Deputy -->
							<div class="form-group form-deputy form-unrequired pb-0 pt-0 mt-0" style="display:none">
								<label for="deputy_id"><?= getRoleDescription("DEPUTY") ?></label>
								<select class="form-input form-control" id="deputy_id" name="deputy_id">
									<?php
										$deputies = getAttribute('deputies');
										foreach($deputies as $deputy){
									?>
											<option value="<?= $deputy['id'] ?>"><?= $deputy['name'] ?></option>
									<?php
										}
									?>
								</select>
				            </div>	

							<!-- Champ Manager -->
							<div class="form-group form-manager form-unrequired pb-0 pt-0 mt-0"  style="display:none">
								<label for="manager_id"><?= getRoleDescription("MANAGER") ?></label>
								<select class="form-input form-control" id="manager_id" name="manager_id">
									<?php
										$managers = getAttribute('managers');
										foreach($managers as $manager){
									?>
											<option value="<?= $manager['id'] ?>"><?= $manager['name'] ?></option>
									<?php
										}
									?>
								</select>
				            </div>
													
							<!-- Champ Admin ONG -->
							<div class="form-group form-admin_ong form-unrequired pb-0 pt-0 mt-0"  style="display:none">
								<label for="admin_ong_id"><?= getRoleDescription("ADMIN_ONG") ?></label>
								<select class="form-input form-control" id="admin_ong_id" name="admin_ong_id">
									<?php
										$admins = getAttribute('admins');
										foreach($admins as $admin){
									?>
											<option value="<?= $admin['id'] ?>"><?= $admin['name'] ?></option>
									<?php
										}
									?>
								</select>
				            </div>

							<!-- Champ Sites -->
							<div class="form-group form-site pb-0 pt-0 mt-0">
								<label for="type">Sites</label>
								<select class="form-input form-control" id="sites_ids" name="sites_ids" multiple>
									<option value=""></option>
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