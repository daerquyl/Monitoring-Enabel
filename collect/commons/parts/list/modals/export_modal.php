<div class="modal fade" id="export_modal" tabindex="-1" role="dialog" aria-labelledby="exportModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md" role="export">
		<div class="modal-content">
			<form id="export-form" action="controller.php" method="post">
				<div class="modal-header bg-dark text-white">
					<h5 class="modal-title" id="export_modal_label">Campagne &agrave; exporter</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group pb-0 pt-0 mt-0">
						<input type="hidden" id="path" name="path" value="export">
						<input type="hidden" id="record" name="record" value="<?=$collectType?>">
						<select class="form-control" id="campaign_id" name="campaign_id">						
						<?php
							$campaigns = findClosedCampaign();
							foreach($campaigns as $campaign){
								?>
								<option value="<?= $campaign['id'] ?>"><?= $campaign['title'] ?></option>
								<?php
							}
						?>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Annuler</button>
					<button id="export-btn" type="submit" class="btn btn-warning">Exporter</button>
				</div>
			</form>
		</div>
	</div>
</div>