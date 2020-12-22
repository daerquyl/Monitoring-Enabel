	<div class="card">
		<div class="card-header text-center text-white bg-dark">
			<h5 class="p-0 m-0"><i class="fa fa-money"></i> Gouvernance de contr&ocirc;le </h5>
		</div>
		<div class="card-body">
			<table class="table-responsive">
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Plan d'action approuv&eacute; en AG: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['annual_plan_approved_ag']) ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Rapport d'activit&eacute; approuv&eacute; en AG: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['annual_activity_report_approved_ag']) ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Rapport financier approuv&eacute; en AG: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['annual_financial_report_approved_ag']) ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Manuel de proc&eacute;dures approuv&eacute;par CA: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['process_manual_approved_ca'])  ?></span></td>
				</tr>
			</table>
		</div>
	</div>
	
	<div class="card">
		<div class="card-header text-center text-white bg-dark">
			<h5 class="p-0 m-0"><i class="fa fa-money"></i> Ressources financi&egrave;res </h5>
		</div>
		<div class="card-body">
			<table class="table-responsive">
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Montant total des adh&eacute;sions per&ccedil;ues: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['membership_amount'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Montant parts sociales: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['social_part_total_amount'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Montant total des cotisations per&ccedil;ues: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['membership_fees'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Montant des redevances recouvr&eacute;es: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['membership_royalties'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Montant des cr&eacute;dits recouvr&eacute;: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['loan'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Montant des subventions: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['subventions'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Montant des dons: </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['donations'] ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Montant des autres ressources </span></td>
					<td><span class="text-danger"><?= 'FCFA '.$collect['other_revenues'] ?></span></td>
				</tr>		
			</table>			
		</div>
	</div>