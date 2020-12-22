					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th>Nom & Prenoms</th>
								<th>Organisme</th>
								<th>Superviseur</th>
								<th>Role</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$users = findAll();
								foreach ($users as $user) {
							?>
							<tr class="user-details" data-search="<?php echo strtoupper(htmlspecialchars($user['name']).".".htmlspecialchars($user['role_description'])); ?>">
								<td><u><a style="color:rgb(150,30,45)" class="user" href="" id="<?php echo $user['id']; ?>"><?php echo $user['name']; ?></a></u></td>
								<td><?php echo $user['organization']; ?></td>
								<td><?php echo $user['supervisor']; ?></td>
								<td><?php echo $user['role_description']; ?></td>
								<td>
									<a class="delete-link" href="controller.php?path=delete&id=<?php echo htmlspecialchars($user['id']); ?>"
									data-toggle="modal" data-target="#delete_modal" data-user="<?php echo htmlspecialchars($user['name']); ?>">									
										<i class="fa fa-remove text-danger"></i>
									</a>
									<a class="update-link" href="controller.php?path=addorupdate&id=<?php echo htmlspecialchars($user['id']); ?>"
									 data-toggle="modal" data-target="#user_modal" data-user="<?php echo htmlspecialchars($user['name']); ?>" data-id="<?php echo htmlspecialchars($user['id']); ?>">									
										<i class="fa fa-pencil text-muted"></i>
									</a>
									<a class="reset-link" href="controller.php?path=reset&id=<?php echo htmlspecialchars($user['id']); ?>"
									 data-toggle="modal" data-target="#reset_modal" data-user="<?php echo htmlspecialchars($user['name']); ?>" data-id="<?php echo htmlspecialchars($user['id']); ?>">									
										<i class="fa fa-refresh text-warning"></i>
									</a>
								</td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>