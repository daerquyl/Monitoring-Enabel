<?php 
$collects = getAll();
$groupedCollects = ($groupCollects) ? group_by('organization_id', $collects) : null;
if($groupedCollects == null){
?>
<table class="table table-sm table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Date</th>
			<th>Site</th>
			<th>Nom</th>
			<th>Statut</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$collects = getAll();
			foreach ($collects as $collect) {
		?>
		<tr class="collect-details alert alert-<?= getStatusColor($collect['status']) ?>"
		data-search="<?= strtoupper(htmlspecialchars($collect['date_creation'].'.'.getStatusDescription($collect['status']).'.'.$collect['site'])) ?>"
		>
			<td><?= $collect['id'] ?></td>
			<td><?= $collect['date_creation'] ?></td>
			<td><?= $collect['site'] ?></td>
			<td><?= $collect['name'] ?></td>
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
<?php
}else{
	foreach($groupedCollects as $key => $_collects){
?>
<div class="alert text-center" role="alert">	
	<span class="btn btn-secondary"><img src="<?=$_collects[0]['logo']?>" width='60' height='30'> <?= $_collects[0]['organization'] ?> 
		<span class="badge badge-light"><?= getCountForOng($key) ?></span>
	</span>
</div>	
<table class="table table-sm table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Date</th>
			<th>Site</th>
			<th>Nom</th>
			<th>Statut</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($_collects as $collect) {
		?>
			<tr class="collect-details alert alert-<?= getStatusColor($collect['status']) ?>"
			data-search="<?= strtoupper(htmlspecialchars($collect['date_creation'].'.'.getStatusDescription($collect['status']).'.'.$collect['site'])) ?>"
			>
				<td><?= $collect['id'] ?></td>
				<td><?= $collect['date_creation'] ?></td>
				<td><?= $collect['site'] ?></td>
				<td><?= $collect['name'] ?></td>
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
<?php
	}
}