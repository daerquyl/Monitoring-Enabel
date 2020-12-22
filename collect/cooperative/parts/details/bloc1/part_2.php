	<div class="card">
		<div class="card-header text-center text-white bg-dark">
			<h5 class="p-0 m-0"><i class="fa fa-money"></i> Comptes bancaires | Entretiens</h5>
		</div>
		<div class="card-body">
			<h5>- Comptes bancaires</h5>
			<?php 
			$bank_accounts = $collect['bank_account'];
			foreach($bank_accounts as $bank_account){
			?>
			<div class="border border-light">
				<table class="table table-bordered table-responsive" >
					<thead class="">
						<tr>
							<th class="text-center">Partenaire financier</th>
							<th class="text-center">Num&eacute;ro de compte</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center"><span class="badge badge-secondary"><?= $bank_account['bank'] ?></span></td>
							<td class="text-center"><span class="text-danger"><?= $bank_account['bank_account'] ?></span></td>
						</tr>
					</tbody>
				</table>
				<hr />
			</div>
			<?php 
			}
			?>
			<h5>- Activites | Entretien</h5>
			<table class="table-responsive">
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Montant Eau: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['water_total_cost'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Cl&ocirc;ture: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['grill_maintenance_cost'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Bassins: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['basin_maintenance_cost'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Panneaux solaires: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['solar_maintenance_cost'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Panneaux solaires: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['generator_maintenance_cost'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Puits: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['hole_maintenance_cost'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">R&eacute;servoir au sol: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['tank_maintenance_cost'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Tuyauterie, robinet et compteur </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['irrigation_network_cost'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">B&agrave;timent </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['building_maintenance_cost'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Mat&eacute;riel agricol</span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['agriculture_equipment_maintenance_cost'] ?></span></td>
				</tr>				
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Animaux &agrave; usage agricole</span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['animal_maintenance_cost'] ?></span></td>
				</tr>				
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Autres: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['other_maintenance_cost'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Total co&ucirc;t maintenance: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['maintenance_cost'] ?></span></td>
				</tr>			
			</table>			
		</div>
	</div>