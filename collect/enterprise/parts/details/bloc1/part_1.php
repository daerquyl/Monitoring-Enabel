<div class="card">
	<div class="card-header text-center text-white bg-dark">
		<h5 class="p-0 m-0"><i class="fa fa-map-marker"></i> Localisation & Identification</h5>
	</div>
	<div class="card-body">
		<table class="table-responsive">
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Region: </span></td>
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
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Nom de l'entreprise: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['name'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Si&egrave;ge de l'entreprise: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['headquarter'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Date de cr&eacute;ation: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['created'] ?></span></td>
			</tr>								
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Forme juridique: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['legal_status'] ?></span></td>
			</tr>				
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Capital Social: </span></td>
				<td><span class="text-danger"><?= $collect['capital'] ?> FCFA</span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">NINEA: </span></td>
				<td><span><?= $collect['ninea'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">RCCM: </span></td>
				<td><span><?= $collect['rccm'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Nom Responsable: </span></td>
				<td><span><?= $collect['manager'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">T&eacute;l&eacute;phone Responsable: </span></td>
				<td><span><?= $collect['phone'] ?></span></td>
			</tr>			
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Adresse Responsable: </span></td>
				<td><span><?= $collect['address'] ?></span></td>
			</tr>			
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Statut Responsable: </span></td>
				<td><span><?= $collect['manager_position'] ?></span></td>
			</tr>			
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Age Responsable: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['age'] ?></span></td>
			</tr>			
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Adulte: </span></td>
				<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['is_adult']) ?></span></td>
			</tr>				
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Activit&eacute; principale: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['principal_activity'] ?></span></td>
			</tr>			
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Autres activit&eacute;s: </span></td>
				<td><span><?= $collect['other_activites'] ?></span></td>
			</tr>			
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Secteur d'activit&eacute;: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['sectors'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Maillon dans la cha&icirc;ne de valeur : </span></td>
				<td><span class="badge badge-secondary"><?= $collect['position_in_value_stream'] ?></span></td>
			</tr>
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Existant avant PARERBA: </span></td>
				<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['created_before_pareba']) ?></span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Responsbale form&eacute; par le projet: </span></td>
				<td><span class="badge badge-secondary"><?= getOuiOrNon($collect['trained_by_pareba']) ?></span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Revenu net du responsable durant la p&eacute;riode: </span></td>
				<td><span class="badge badge-secondary"><?= $collect['manager_revenue'] ?></span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Trimestres travaill&eacute;s cette ann&eacute;e: </span></td>
				<td><span class="text-danger"><?= $collect['worked_trimesters'] ?></span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Chiffre d'affaire pr&eacute;c&eacute;dent: </span></td>
				<td><span class="text-danger"><?= $collect['ca_before_pareba'] ?> FCFA</span></td>
			</tr>		
		</table>
	</div>
</div>
