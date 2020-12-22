					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th>Logo</th>
								<th>Nom</th>
								<th>Description</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$organizations = findAll();
								foreach ($organizations as $organization) {
							?>
							<tr class="organization-details" data-search="<?= strtoupper(htmlspecialchars($organization['name'])) ?>">
								<td><img src="<?= $organization['logo'] ?>" width=70 height=35 class="img-responsive"/></td>
								<td><u><a style="color:rgb(150,30,45)" class="organization" href="" id="<?=$organization['id'] ?>">[<?= $organization['name'] ?>]</a></u></td>
								<td><?= $organization['description'] ?></td>
								<td>
									<a class="delete-link" href="controller.php?path=delete&id=<?= htmlspecialchars($organization['id']); ?>"
									data-toggle="modal" data-target="#delete_modal" data-organization="<?= htmlspecialchars($organization['name']); ?>">									
										<i class="fa fa-remove text-danger"></i>
									</a>
									<a class="update-link" href="updateOrganization.php?id=<?= htmlspecialchars($organization['id']); ?>"
									 data-toggle="modal" data-target="#organization_modal" data-organization="<?= htmlspecialchars($organization['name']); ?>" data-id="<?= htmlspecialchars($organization['id']); ?>">									
										<i class="fa fa-pencil text-muted"></i>
									</a>
								</td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>