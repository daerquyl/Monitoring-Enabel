	<div class="card">
		<div class="card-header text-center text-white bg-dark">
			<h5 class="p-0 m-0"><i class="fa fa-money"></i> Outils de gestion </h5>
		</div>
		<div class="card-body">
			<table class="table-responsive">
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Outils de gestion en place: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['have_management_tool']) ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Outils de gestion mis &agrave; jour : </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['is_management_tool_updated']) ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Registre d'affectation de parcelles &agrave; jour par campagne: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['is_parcel_assignation_register_updated']) ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Bordereaux d'encaissement: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['cash_slip'])  ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Bordereaux de d&eacute;caissement: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['disbursment_slip'])  ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Journal de caisse: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['cash_journal'])  ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Journal de banque: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['bank_journal']) ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Fiche d'engagement de d&eacute;pense: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['expenses_note'])  ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Quittances de facturation redevances: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['invoice_note'])  ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Fiche de paie (personnel de la cooperative ...): </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['payment_note'])  ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Budget: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['budget']) ?></span></td>
				</tr>
				<tr>
					<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Tableau emplois et ressources: </span></td>
					<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['resources']) ?></span></td>
				</tr>
			</table>			
		</div>
	</div>