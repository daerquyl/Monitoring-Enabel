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
									<td><span><?= $collect['village'] ?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Superficie Totale: </span></td>
									<td><span class="badge badge-secondary"><?= $collect['total_ha'].' ha' ?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">P&eacute;riode de rapportage: </span></td>
									<td><span class="badge badge-secondary"><?= $collect['reporting_period'] ?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Superficie fonctionnelle: </span></td>
									<td><span class="badge badge-secondary"><?= $collect['total_ha_irrigated'].' ha' ?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Superficie d&eacute;lib&eacute;r&eacute;e: </span></td>
									<td><span class="badge badge-secondary"><?= $collect['total_ha_legally_secured'].' ha' ?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Superficie en production: </span></td>
									<td><span class="badge badge-secondary"><?= $collect['total_ha_running'].' ha' ?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Superficie cl&ocirc;tur&eacute;s: </span></td>
									<td><span class="badge badge-secondary"><?= $collect['total_ha_fenced'].' ha' ?></span></td>
								</tr>
								
							</table>
						</div>
					</div>
