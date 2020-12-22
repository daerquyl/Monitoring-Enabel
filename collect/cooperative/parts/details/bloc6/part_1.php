	<div class="card">
		<div class="card-header text-center text-white bg-dark">
			<h5 class="p-0 m-0"><i class="fa fa-bullseyes"></i> Acc&eacute;s aux services non financiers </h5>
		</div>
		<div class="card-body">
			<?php 
			$supports = $collect['support'];
			foreach($supports as $support){
			?>
			<div class="border border-light">
				<table class="table table-bordered table-responsive table-sm" >
					<caption>D&eacute;tails service</caption>
					<thead class="">
						<tr>
							<th class="text-center">Fournisseur</th>
							<th class="text-center">Type d'appui</th>
							<th class="text-center">Instances form&eacute;es</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center"><span class="badge badge-secondary"><?= $support['provider'] ?></span></td>
							<td class="text-center"><span class="badge badge-secondary"><?= $support['type'] ?></span></td>
							<td class="text-center"><span class="text-danger"><?= $support['trained_instances'] ?></span></td>
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
			?>
						<table class="table-responsive">
				<tr>
					<td class="p-1 pl-3 pr-3">
						<span class="font-weight-bold">Partenariat avec commune: </span>
					</td>
					<td>
						<span  class="badge badge-secondary"><?= getOuiOrNon($collect['partnership_commune'])  ?></span>
						<span> | </span>
						<span><?= $collect['commune_partner'] ?></span>
					</td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3">
						<span class="font-weight-bold">Contrat op&eacute;rateur maintenance: </span>
					</td>
					<td>
						<span  class="badge badge-secondary"><?= getOuiOrNon($collect['maintenance_contract'])  ?></span>
						<span> | </span>
						<span><?= $collect['maintenance_partner'] ?></span>
					</td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3">
						<span class="font-weight-bold">Autre partenaire: </span>
					</td>
					<td>
						<span  class="badge badge-secondary"><?= getOuiOrNon($collect['other_partnership'])  ?></span>
						<span> | </span>
						<span><?= $collect['other_partner'] ?></span>
					</td>
				</tr>							
				<tr>
					<td class="p-1 pl-3 pr-3">
						<span class="font-weight-bold">Appartenance &agrave; une f&eacute;d&eacute;ration: </span>
					</td>
					<td>
						<span  class="badge badge-secondary"><?= getOuiOrNon($collect['part_of_federation'])  ?></span>
						<span> | </span>
						<span><?= $collect['federation_partner'] ?></span>
					</td>
				</tr>
			</table>
		</div>
	</div>