					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th>Titre</th>
								<th>Debut</th>
								<th>Fin</th>
								<th>Statut</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$campaigns = findAll();
								foreach ($campaigns as $campaign) {
							?>
							<tr class="campaign-details" data-search="<?= strtoupper(htmlspecialchars($campaign['title']).".".getStatusDescription(htmlspecialchars($campaign['status']))) ?>">
								<td><u><a style="color:rgb(150,30,45)" class="campaign" href="" id="<?=$campaign['id'] ?>">[<?= $campaign['title'] ?>]</a></u></td>
								<td><?= $campaign['start_date'] ?></td>
								<td><?= $campaign['end_date'] ?></td>
								<td><?= getStatusDescription($campaign['status']); ?></td>
								<td>
									<?php
										$startable = canBeStarted($campaign['status']);
										$closeable = canBeEnded($campaign['status']);
										$deletable = canBeDeleted($campaign['status']);
										$updatable = canBeUpdated($campaign['status']);
										$extendable = canBeExtended($campaign['status']);
									?>
									<a class="start-link <?= ($startable ? "" : "d-none") ?>" href="controller.php?path=start&id=<?= htmlspecialchars($campaign['id']); ?>"
									data-toggle="modal" data-target="#start_modal" data-campaign="<?= htmlspecialchars($campaign['title']); ?>">									
										<i class="fa fa-caret-square-o-right text-primary"></i>
									</a>
									<a class="end-link <?= ($closeable ? "" : "d-none") ?>" href="controller.php?path=close&id=<?= htmlspecialchars($campaign['id']); ?>"
									data-toggle="modal" data-target="#end_modal" data-campaign="<?= htmlspecialchars($campaign['title']); ?>">									
										<i class="fa fa-power-off text-warning"></i>
									</a>
									<a class="delete-link <?= ($deletable ? "" : "d-none") ?>" href="controller.php?path=delete&id=<?= htmlspecialchars($campaign['id']); ?>"
									data-toggle="modal" data-target="#delete_modal" data-campaign="<?= htmlspecialchars($campaign['title']); ?>">									
										<i class="fa fa-remove text-danger"></i>
									</a>
									<a class="update-link <?= ($updatable ? "" : "d-none") ?>" href="updateCampaign.php?id=<?= htmlspecialchars($campaign['id']); ?>"
									 data-toggle="modal" data-target="#campaign_modal" data-campaign="<?= htmlspecialchars($campaign['title']); ?>" data-id="<?= htmlspecialchars($campaign['id']); ?>">									
										<i class="fa fa-pencil text-muted"></i>
									</a>
									<a class="extend-link <?= ($extendable ? "" : "d-none") ?>" href="extendCampaign.php?id=<?= htmlspecialchars($campaign['id']); ?>"
									 data-toggle="modal" data-target="#campaign_modal" data-campaign="<?= htmlspecialchars($campaign['title']); ?>" data-id="<?= htmlspecialchars($campaign['id']); ?>">									
										<i class="fa fa-expand text-muted"></i>
									</a>
								</td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>