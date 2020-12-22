	<div class="card mb-4">
		<div class="card-header text-center text-white bg-dark">
			<h5 class="p-0 m-0"><i class="fa fa-group"></i> Actionnaires </h5>
		</div>
		<div class="card-body">
			<table class="table-responsive">
				<tbody>
					<tr>
						<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Hommes J | A: </span>
						<td>
							<span class="badge badge-secondary"><?= $collect['men_shareholder_lt35'] ?></span>
							<span> | </span>
							<span class="badge badge-secondary"><?= $collect['men_shareholder_gt35'] ?></span>
						</td>
					</tr>
					<tr>
						<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Femmes J | A: </span>
						<td>
							<span class="badge badge-secondary"><?= $collect['women_shareholder_lt35'] ?></span>
							<span> | </span>
							<span class="badge badge-secondary"><?= $collect['women_shareholder_gt35'] ?></span>
						</td>
					</tr>
					<tr>
						<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">MR - Hommes J | A: </span>
						<td>
							<span class="badge badge-secondary"><?= $collect['mr_men_shareholder_lt35'] ?></span>
							<span> | </span>
							<span class="badge badge-secondary"><?= $collect['mr_men_shareholder_gt35'] ?></span>
						</td>
					</tr>
					<tr>
						<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">MR - Femmes J | A: </span>
						<td>
							<span class="badge badge-secondary"><?= $collect['mr_women_shareholder_lt35'] ?></span>
							<span> | </span>
							<span class="badge badge-secondary"><?= $collect['mr_women_shareholder_gt35'] ?></span>
						</td>
					</tr>					
					<tr>
						<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">PVH - Hommes J | A: </span>
						<td>
							<span class="badge badge-secondary"><?= $collect['pvh_men_shareholder_lt35'] ?></span>
							<span> | </span>
							<span class="badge badge-secondary"><?= $collect['pvh_men_shareholder_gt35'] ?></span>
						</td>
					</tr>
					<tr>
						<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">PVH - Femmes J | A: </span>
						<td>
							<span class="badge badge-secondary"><?= $collect['pvh_women_shareholder_lt35'] ?></span>
							<span> | </span>
							<span class="badge badge-secondary"><?= $collect['pvh_women_shareholder_gt35'] ?></span>
						</td>
					</tr>				
				</tbody>
			</table>
		</div>
	</div>
