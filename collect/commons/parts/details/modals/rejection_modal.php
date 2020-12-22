					<div class="modal fade" id="reject_modal" tabindex="-1" role="dialog" aria-labelledby="rejectModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-md" role="reject">
							<div class="modal-content">
							<form id="reject-form" action="controller.php" method="post">
								<div class="modal-header bg-dark text-white">
									<h5 class="modal-title" id="reject_modal_label">Rejeter fiche</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p class="lead" id="reject-msg">Confirmer rejet de la fiche : <span class="text-danger "></span></p>
									<div class="form-group pb-0 pt-0 mt-0">
										<input type="hidden" id="path" name="path" value="reject">
										<input type="hidden" id="record" name="record" value="<?=$collectType?>">
										<input type="hidden" id="id" name="id" value="">
										<label for="reason" class="font-weight-bold">Motifs du rejet</label>
										<textarea class="form-control" id="reason" name="reason" required>
										</textarea>
									</div>									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Annuler</button>
									<button id="reject-btn" type="submit" class="btn btn-warning">Confirmer</button>
								</div>
							</form>
							</div>
						</div>
					</div>