	<div class="card">
		<div class="card-header text-center text-white bg-dark">
			<h5 class="p-0 m-0"><i class="fa fa-bullseyes"></i>Informations sur les employ&eacute;s</h5>
		</div>
		<div class="card-body">
			<div>
				<span class="font-weight-bold">Nombre d'employ&eacute;s: </span><span><?= $collect['employee_count'] ?></span>
			</div>
			<?php 
			$employees = $collect['employee'];
			foreach($employees as $employee){
				if(!empty(trim(str_replace("-","",$employee['employee_name'])))){				
			?>
			<div class="border border-light">
				<table class="table table-bordered table-responsive table-sm" >
					<thead class="">
						<tr>
							<th class="text-center">Nom & Pr&eacute;noms</th>
							<th class="text-center">Sexe</th>
							<th class="text-center">Age</th>
							<th class="text-center">Pvh</th>
							<th class="text-center">MR</th>
							<th class="text-center">MR Localit&eacute;</th>
							<th class="text-center">B&eacute;n&eacute;ficiaire formation</th>
							<th class="text-center">Relation avec le g&eacute;rant</th>
							<th class="text-center">Statut</th>
							<th class="text-center">Jours travaill&eacute;s</th>
							<th class="text-center">Montant per&ccedil;u</th>
							<th class="text-center">Mode de r&eacute;mun&eacute;ration</th>
							<th class="text-center">Campagnes travaill&eacute;es cette annee dans cette organisation</th>
							<th class="text-center">Campagnes travaill&eacute;es ailleurs cette annee</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center"><span class="badge badge-secondary"><?= $employee['employee_name'] ?></span></td>
							<td class="text-center"><span class="badge badge-secondary"><?= $employee['employee_sex']; ?></span></td>
							<td class="text-center"><span class="text-danger"><?= $employee['employee_age'] ?></span></td>
							<td class="text-center"><span class="text-danger"><?= getOuiOrNon($employee['employee_mr']); ?></span></td>
							<td class="text-center"><span class="badge badge-secondary"><?= getOuiOrNon($employee['employee_mr_local']); ?></span></td>
							<td class="text-center"><span class="text-danger"><?= getOuiOrNon($employee['employee_pvh']); ?></span></td>
							<td class="text-center"><span class="badge badge-secondary"><?= getOuiOrNon($employee['employee_trained_by_pareba']); ?></span></td>
							<td class="text-center"><span class="text-danger"><?= $employee['relationship_with_manager'] ?></span></td>
							<td class="text-center"><span class="badge badge-secondary"><?= $employee['employee_status'] ?></span></td>
							<td class="text-center"><span class="text-danger"><?= $employee['worked_days'] ?></span></td>						
							<td class="text-center"><span class="text-danger"><?= $employee['employee_revenue'] ?></span></td>						
							<td class="text-center"><span class="text-danger"><?= $employee['payment_mode'] ?></span></td>						
							<td class="text-center"><span class="text-danger"><?= $employee['employee_worked_campaigns'] ?></span></td>						
							<td class="text-center"><span class="text-danger"><?= $employee['employee_other_worked_campaigns'] ?></span></td>											
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