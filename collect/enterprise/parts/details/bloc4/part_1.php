	<div class="card">
		<div class="card-header text-center text-white bg-dark">
			<h5 class="p-0 m-0"><i class="fa fa-bullseyes"></i> Acc&eacute;s aux services non financiers </h5>
		</div>
		<div class="card-body">
			<div>
				<span class="font-weight-bold">Acc&egrave;s aux services non financiers: </span><span><?= getOuiOrNon($collect['capacity_building']) ?></span>
			</div>

			<?php 
			$supports = $collect['support'];
			foreach($supports as $support){
				if(!empty(trim(str_replace("-","",$support['provider'])))){
			?>
			<div class="border border-light">
				<table class="table table-bordered table-responsive table-sm" >
					<caption>D&eacute;tails service</caption>
					<thead class="">
						<tr>
							<th class="text-center">Fournisseur</th>
							<th class="text-center">Type d'appui</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center"><span class="badge badge-secondary"><?= $support['provider'] ?></span></td>
							<td class="text-center"><span class="badge badge-secondary"><?= $support['type'] ?></span></td>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered table-responsive table-sm">
					<caption>B&eacute;n&eacute;ficiaires</caption>
					<thead>
						<tr>
							<th>H-J</th>
							<th>H-A</th>
							<th>F-J</th>
							<th>F-A</th>
							<th>MR H-J</th>
							<th>MR H-A</th>
							<th>MR F-J</th>
							<th>MR F-A</th>
							<th>PVH H-J</th>
							<th>PVH H-A</th>
							<th>PVH F-J</th>
							<th>PVH F-A</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><span class="badge badge-secondary"><?= '(H) '.$support['men_beneficiary_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$support['men_beneficiary_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$support['women_beneficiary_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$support['women_beneficiary_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$support['mr_men_beneficiary_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$support['mr_men_beneficiary_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$support['mr_women_beneficiary_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$support['mr_women_beneficiary_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$support['pvh_men_beneficiary_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$support['pvh_men_beneficiary_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$support['pvh_women_beneficiary_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$support['pvh_women_beneficiary_gt35'] ?></span></td>
						</tr>
					</tbody>
				</table>
				<hr />
			</div>
			<?php 
				}
			}
			?>
		</div>
	</div>