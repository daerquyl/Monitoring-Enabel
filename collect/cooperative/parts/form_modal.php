		<div class="modal fade" id="cooperative_modal" tabindex="-1" role="dialog" aria-labelledby="cooperativeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="delete">
				<div class="modal-content">
			       <form id="cooperative-form" novalidate class="form-to-validate record-card" action="controller.php" data-minPart=1 data-maxPart=16 method="post">               
						<div class="modal-header bg-dark text-white">
							<h5 class="modal-title" id="cooperative_modal_label">Organisation d'usagers</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<?php require_once($collectType."/parts/form/fieldset_1.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_2.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_3.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_4.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_5.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_6.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_7.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_8.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_9.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_10.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_11.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_12.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_13.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_14.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_15.php"); ?>
							<?php require_once($collectType."/parts/form/fieldset_16.php"); ?>
						</div>
						<div class="modal-footer">
							<button type="button" class="module-form-action btn btn-warning previous">Precedent</button>
							<button type="button" class="module-form-action btn btn-warning next">Suivant</button>
							<button type="submit" class="module-form-action btn btn-danger end">Enregistrer</button>
						</div>								
						</div>
			        </form>	
				</div>
			</div>
		</div>