<table class="table table-sm table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Date</th>
			<th>Site</th>
			<th>Village</th>
			<th>Statut</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($collects as $collect) {
		?>
		<tr class="collect-details alert alert-<?= getStatusColor($collect['status']) ?>"
		data-search="<?= strtoupper(htmlspecialchars($collect['date_creation'].'.'.$collect['status'].'.'.$collect['site_id'])) ?>"
		>
			<td><?= $collect['id'] ?></td>
			<td><?= $collect['date_creation'] ?></td>
			<td><?= $collect['site'] ?></td>
			<td><?= $collect['village'] ?></td>
			<td class="badge badge-<?= getStatusColor($collect['status'])?>"><?= getStatusDescription($collect['status']) ?></td>
			<td>
				<a class="details-link" href="controller.php?path=details&record=<?=$collectType?>&id=<?= htmlspecialchars($collect['id']); ?>">									
					<i class="fa fa-eye text-info"></i>
				</a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>