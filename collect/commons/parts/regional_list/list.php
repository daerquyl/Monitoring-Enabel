<table class="table table-sm table-striped">
	<thead>
		<tr>
			<?php
			$stats = (!$groupCollects) ? statsByRegion($collectType) : statsByOng($collectType);
			$status = ($action == "confirm") ? 'VALIDATED' : 'CONFIRMED';
			//var_dump($groupCollects);
			if(!$groupCollects){
			?>
			<th>Region</th>
			<th><?= ucfirst(strtolower(getStatusDescription("CREATED"))) ?></th>
			<th><?= ucfirst(strtolower(getStatusDescription("WAITING_VALIDATION"))) ?></th>
			<th><?= ucfirst(strtolower(getStatusDescription("VALIDATED"))) ?></th>
			<th><?= ucfirst(strtolower(getStatusDescription("CONFIRMED"))) ?></th>
			<th><?= ucfirst(strtolower(getStatusDescription("SENT"))) ?></th>
			<th><?= ucfirst(strtolower(getStatusDescription("REJECTED"))) ?></th>
			<th>Actions</th>
			<?php
			}else{
			?>
			<th>Region</th>
				<?php
				foreach($stats['organizations'] as $organization_id => $organization){
				?>
					<th><?= ucfirst(strtolower($organization)) ?></th>
				<?php
				}
				?>
			<th>Actions</th>			
			<?php
			}
			?>
		</tr>
	</thead>
	<tbody>
		<?php 
			if(!$groupCollects){
				foreach ($stats as $stat) {
				?>
				<tr class="collect-details" data-search="<?= strtoupper(htmlspecialchars($stat['region'])) ?>">
					<td><?= $stat['region'] ?></td>
					<td><span class="badge badge-info"><?= $stat['CREATED'] ?></span></td>
					<td><span class="badge badge-warning"><?= $stat['WAITING_VALIDATION'] ?></span></td>
					<td><span class="badge badge-primary"><?= $stat['VALIDATED'] ?></span></td>
					<td><span class="badge badge-primary"><?= $stat['CONFIRMED'] ?></span></td>
					<td><span class="badge badge-success"><?= $stat['SENT'] ?></span></td>
					<td><span class="badge badge-danger"><?= $stat['REJECTED'] ?></span></td>
					<td>
						<a class="expand-view-link <?= ($stat[$status] == 0) ? "d-none" : "" ?>
							<?= check_page_ok($current_page_base."controller.php?path=regional_details&*") ? "" : "d-none" ?>" 
							href="controller.php?path=regional_details&record=<?=$collectType?>&region=<?= htmlspecialchars($stat['region_id']); ?>">									
							<i class="fa fa-expand text-dark"></i>
						</a>
						<a class="" 
							href="controller.php?path=regional_complete_details&record=<?=$collectType?>&region=<?= htmlspecialchars($stat['region_id']); ?>">									
							<i class="fa fa-eye text-primary"></i>
						</a>
					</td>
				</tr>
				<?php
				}
			}else{
				foreach ($stats['regions'] as $region_id => $region) {
				?>
				<tr class="collect-details" data-search="<?= strtoupper($region) ?>">
					<td><?= $region ?></td>
					<?php
					foreach($stats['organizations'] as $organization_id => $organization){
					?>
					<td><span class="badge badge-success"><?= $stats['data'][$organization_id]['regions'][$region_id]['total'] ?? 0 ?></span></td>
					<?php
					}
					?>
					<td>
						<a class="">									
							<i class="fa fa-check text-success"></i>
						</a>
					</td>
				</tr>				
				<?php
				}
			}
			?>
	</tbody>
</table>