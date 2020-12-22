		<div class="modal fade" id="campaign_modal" tabindex="-1" role="dialog" aria-labelledby="campaignModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="delete">
				<div class="modal-content">
			       <form id="campaign-form" action="controller.php" method="post">               
						<div class="modal-header bg-dark text-white">
							<h5 class="modal-title" id="campaign_modal_label">Informations campagne</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<!-- Champ PATH -->
							<input type="hidden" id="path" name="path" value="addorupdate"/>
							
							<!-- Champ id -->
			                <input type="hidden" id="id" name="id"/>      
			
							<!-- Champ titre -->
							<div class="form-group pb-0 pt-0 mt-0">
								<label for="title">Titre</label>
				                <input class="form-input form-control" type="text" id="title" name="title"/>       
				            </div>
				            
							<!-- Champ debut -->
							<div class="form-group pb-0 pt-0 mt-0">
								<label for="start_date">Debut</label>
				                <input class="form-input form-control" type="date" id="start_date" name="start_date"/>       
				            </div>

							<!-- Champ fin -->
							<div class="form-group pb-0 pt-0 mt-0">
								<label for="end_date">Fin</label>
				                <input class="form-input form-control" type="date" id="end_date" name="end_date"/>       
				            </div>
														
			                <div class="form-actions form-footer form-group" id="form-action-create">
			                    <button type="submit" class="form-control btn btn-warning">ENREGISTRER</button>
			                </div>					
						</div>
			        </form>	
				</div>
			</div>
		</div>