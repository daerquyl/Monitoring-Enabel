<div class="card">
	<div class="card-header text-center text-white bg-dark">
		<h5 class="p-0 m-0"><i class="fa fa-map-marker"></i> Localisation & Identification</h5>
	</div>
	<div class="card-body">
		<table class="table-responsive">
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Site: </span></td>
				<td><span><?= $collect['site'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">R&eacute;gion: </span></td>
				<td><span><?= $collect['region'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">D&eacute;partement: </span></td>
				<td><span><?= $collect['department'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Commune: </span></td>
				<td><span><?= $collect['commune'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">LatLong: </span></td>
				<td><span><?= $collect['latitude'] . ' | ' . $collect['longitude'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Villages polaris&eacute;s: </span></td>
				<td><span><?= $collect['polarized_villages'] ?></span></td>
			</tr>			
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Nom organisation: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['name'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Date de cr&eacute;ation: </span></td>
				<td><span><?= $collect['created'] ?></span></td>
			</tr>									
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Statut: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['legal_status'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Montant part sociale: </span></td>
				<td><span class="text-danger"><?= $collect['social_part_amount'] ?> FCFA</span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Montant droits d'adh&eacute;sion: </span></td>
				<td><span class="text-danger"><?= $collect['adhesion_amount'] ?> FCFA</span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Capital social: </span></td>
				<td><span class="text-danger"><?= $collect['capital'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Date approbation des status: </span></td>
				<td><span><?= $collect['status_approval_date'] ?></span></td>
			</tr>	
			<tr>
				<td class="p-1 pl-3 pr-3">
					<span class="font-weight-bold">Date reconnaissance juridique / NINEA: </span>
				</td>
				<td>
					<span><?= $collect['legal_approval_date'] ?></span>
					<span> | </span>
					<span class="badge badge-secondary"><?= $collect['legal_number'] ?></span>
				</td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3">
					<span class="font-weight-bold">Date / Num&eacute;ro d'agr&eacute;ment: </span>
				</td>
				<td>
					<span><?= $collect['agreement_date'] ?></span>
					<span> | </span>
					<span class="badge badge-secondary"><?= $collect['agreement_number'] ?></span>
				</td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Pr&eacute;sence d'un g&eacute;rant: </span></td>
				<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['has_manager']) ?></span></td>
			</tr>
			<?php if($collect['has_manager']){?>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Nom du g&eacute;rant: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['manager_name'] ?></span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Adresse du g&eacute;rant: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['manager_address'] ?></span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Sexe du g&eacute;rant: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['manager_sex']=="F" ? "Femme" : "Homme" ?></span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Age du g&eacute;rant: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['age'] ?></span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Identifiant national du g&eacute;rant: </span></td>
				<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['manager_nid'])?></span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">T&eacute;l&eacute;phone du g&eacute;rant: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['manager_phone'] ?></span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Migrant de retour: </span></td>
				<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['mr']) ?></span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">PVH: </span></td>
				<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['mr']) ?></span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Form&eacute; par le projet: </span></td>
				<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['trained_by_pareba']) ?></span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Revenue du g&eacute;rant: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['manager_revenue'] ?></span></td>
			</tr>					<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Campagnes travaill&eacute;es: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['worked_campaigns'] ?></span></td>
			</tr>	
			<?php } ?>
		</table>
	</div>
</div>
