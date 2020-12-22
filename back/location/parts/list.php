					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th>Nom</th>
								<th>Type</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$locations = findAllLocations();
								foreach ($locations as $location) {
							?>
							<tr class="location-details" data-search="<?= strtoupper(htmlspecialchars($location['name'].".".$location['type'])) ?>">
								<td><u><a style="color:rgb(150,30,45)" class="location" href="" id="<?=$location['id'] ?>">[<?= $location['name'] ?>]</a></u></td>
								<td><?= $location['type'] ?></td>
								<td>
									<a class="delete-link" href="controller.php?path=delete&id=<?= htmlspecialchars($location['id']); ?>&type=<?= htmlspecialchars($location['type']); ?>"
									data-toggle="modal" data-target="#delete_modal" data-location="<?= htmlspecialchars($location['name']); ?>">									
										<i class="fa fa-remove text-danger"></i>
									</a>
									<a class="update-link" href="controller.php?path=addorupdate&id=<?= htmlspecialchars($location['id']); ?>"
									 data-toggle="modal" data-target="#location_modal" data-location="<?= htmlspecialchars($location['name']); ?>" 
									 data-id="<?= htmlspecialchars($location['id']); ?>" data-type="<?= htmlspecialchars($location['type']); ?>">									
										<i class="fa fa-pencil text-muted"></i>
									</a>
								</td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>