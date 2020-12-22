		<div class="modal fade" id="organization_modal" tabindex="-1" role="dialog" aria-labelledby="organizationModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="delete">
				<div class="modal-content">
			       <form id="organization-form" action="controller.php" method="post">               
						<div class="modal-header bg-dark text-white">
							<h5 class="modal-title" id="organization_modal_label">Informations organisme</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<!-- Champ PATH -->
							<input type="hidden" id="path" name="path" value="addorupdate"/>
							
							<!-- Champ id -->
			                <input type="hidden" id="id" name="id"/>      
			
							<!-- Champ logo -->
							<div class="form-group pb-0 pt-0 mt-0">
								<label for="logo">Logo</label>
				                <input class="form-input form-control" type="text" id="logo" name="logo"/>       
				            </div>
				            
							<!-- Champ titre -->
							<div class="form-group pb-0 pt-0 mt-0">
								<label for="title">D&eacute;nomination</label>
				                <input class="form-input form-control" type="text" id="name" name="name"/>       
				            </div>
			                
							<!-- Champ description -->
							<div class="form-group">
								<label for="description">Description</label>
				                <textarea class="form-input form-control" id="description" name="description"/></textarea>       
							</div>
														
			                <div class="form-actions form-footer form-group" id="form-action-create">
			                    <button type="submit" class="form-control btn btn-warning">ENREGISTRER</button>
			                </div>					
						</div>
			        </form>	
				</div>
			</div>
		</div>