					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th>Nom</th>
								<th>Commune</th>
								<th>D&eacute;partement</th>
								<th>R&eacute;gion</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$sites = getAll();
								foreach ($sites as $site) {
							?>
							<tr class="site-details" data-search="<?= strtoupper(htmlspecialchars($site['name'])) ?>">
								<td><u><a style="color:rgb(150,30,45)" class="site" href="" id="<?=$site['id'] ?>">[<?= $site['name'] ?>]</a></u></td>
								<td><?= $site['commune'] ?></td>
								<td><?= $site['department'] ?></td>
								<td><?= $site['region'] ?></td>
								<td>
									<a class="delete-link" href="controller.php?path=delete&id=<?= htmlspecialchars($site['id']); ?>"
									data-toggle="modal" data-target="#delete_modal" data-site="<?= htmlspecialchars($site['name']); ?>">									
										<i class="fa fa-remove text-danger"></i>
									</a>
									<a class="update-link" href="updateSite.php?id=<?= htmlspecialchars($site['id']); ?>"
									 data-toggle="modal" data-target="#site_modal" data-site="<?= htmlspecialchars($site['name']); ?>" data-id="<?= htmlspecialchars($site['id']); ?>">									
										<i class="fa fa-pencil text-muted"></i>
									</a>
								</td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>