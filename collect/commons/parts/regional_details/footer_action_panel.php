			<p class="text-center mt-3">
				<?php 
					$check_action = ($action == "confirm") ? "canBeConfirmed" : "canBeSent";
				?>
				<span>
					<button class="<?= $check_action($collects,$creator) ? "" : "d-none"  ?>
						btn btn-<?= getStatusColor(($action == "confirm") ? "CONFIRMED" : "SENT") ?>">
						<a class="confirm-link text-white" href="controller.php?path=<?= $action ?>&record=<?=$collectType?>&region=<?= $region; ?>"
							data-toggle="modal" data-target="#confirm_modal" data-collect="<?= $collects[0]['region']; ?>">
							<i class="fa fa-check"></i> 
							<?= ($action == "confirm") ? "Confirmer" : "Soumettre" ?>
						</a>
					</button>
				</span>
			</p>
