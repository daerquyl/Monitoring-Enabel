			<div class="text-center mx-auto shadow p-1 mb-3 bg-light rounded">
				<a href="" class="slidelink slideleft text-dark" style="position:relative; top:5; font-size : 1.8em;"><i class="fa fa-chevron-circle-left"></i></a>
				<span class="<?= canBeModified($collect['status'],$creator) ? "" : "d-none" ?>">
					<button class="btn btn-secondary" data-toggle="modal" data-target="#<?= $collectType ?>_modal">
						<i class="fa fa-pencil"></i> Modifier
					</button>
				</span>
				<span>
					<button class="<?= canBeSubmitted($collect['status'],$creator) ? "" : "d-none" ?>
						btn btn-warning">
						<a class="submit-link text-dark" href="controller.php?path=submit&record=<?=$collectType?>&id=<?= htmlspecialchars($collect['id']); ?>"
							data-toggle="modal" data-target="#submit_modal" data-collect="<?= htmlspecialchars($collect['id']); ?>">
							<i class="fa fa-check"></i> Soumettre
						</a>
					</button>
				</span>				
				<span>
					<button class="<?= canBeDeleted($collect['status'],$creator) ? "" : "d-none" ?>
						btn btn-danger">
						<a class="delete-link text-white" href="controller.php?path=delete&record=<?=$collectType?>&id=<?= htmlspecialchars($collect['id']); ?>"
							data-toggle="modal" data-target="#delete_modal" data-collect="<?= htmlspecialchars($collect['id']); ?>">
							<i class="fa fa-trash"></i> Supprimer
						</a>
					</button>
				</span>
				<span>
					<button class="<?= canBeValidated($collect['status'],$creator) ? "" : "d-none"  ?>
						btn btn-warning">
						<a class="validate-link text-dark" href="controller.php?path=validate&record=<?=$collectType?>&id=<?= htmlspecialchars($collect['id']); ?>"
							data-toggle="modal" data-target="#validate_modal" data-collect="<?= htmlspecialchars($collect['id']); ?>">
							<i class="fa fa-check"></i> Valider
						</a>
					</button></span>
				<span>
					<button class="<?= canBeRejected($collect['status'],$creator) ? "" : "d-none"  ?>
						btn btn-danger">
						<a class="reject-link text-white" href="controller.php?path=reject&record=<?=$collectType?>&id=<?= htmlspecialchars($collect['id']); ?>"
							data-toggle="modal" data-target="#reject_modal" data-collect="<?= htmlspecialchars($collect['id']); ?>">
							<i class="fa fa-cross"></i> Rejeter
						</a>
					</button></span>
					
				<a href="" class="slidelink slideright text-dark" style="position:relative; top:5; font-size : 1.8em;"><i class="fa fa-chevron-circle-right"></i></a>
			</div>
