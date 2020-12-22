					<div class="card">
						<div class="card-header text-center text-white bg-dark">
							<h5 class="p-0 m-0"><i class="fa fa-building"></i> Am&eacute;nagements hydroagricoles </h5>
						</div>
						<div class="card-body">
							<table class="table-responsive">
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Type d'irrigation: </span></td>
									<td><span class=""><?= ($collect['irrigation_type'] == "AUTRE")? $collect['other_irrigation_type'] : $collect['irrigation_type']?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Sources d'eau: </span></td>
									<td><span class="badge badge-secondary"><?= '(Puits) '.$collect['holes'] ?></span> <br /> 
									<span class="badge badge-secondary"><?= '(Bassins) '.$collect['basins'] ?></span> <br />
									<span class="badge badge-secondary"><?= '(Forages) '.$collect['forages'] ?></span> <br />
									<span class="badge badge-secondary"><?= '(Robinets) '.$collect['taps'] ?></span> <br />
									</td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Debit / Profondeur Source: </span></td>
									<td><span class="badge badge-secondary"><?= $collect['water_debit'].' m3/h' ?></span> - 
									<span class="badge badge-secondary"><?= $collect['water_moy_deep'].' m' ?></span>
									</td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Pompes: </span></td>
									<td><span class="badge badge-secondary"><?= '(Moto) '.$collect['moto_pumps'] ?></span> - 
									<span class="badge badge-secondary"><?= '(Solaire) '.$collect['solar_pumps'] ?></span>
									</td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Source d'&eacute;nergie d'exhaure: </span></td>
									<td><span><?= $collect['energy_type'] ?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Puissances source &eacute;nergie: </span></td>
									<td><span class="badge badge-secondary"><?= $collect['energy_powerkw'].' KW / '.$collect['energy_powerkva'].' KVA' ?></span>
									</td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Canalisation / Cl&ocirc;ture / Haie vive: </span></td>
									<td>
									<span class="badge badge-secondary"><?= $collect['length_piping'].' m' ?></span> - 
									<span class="badge badge-secondary"><?= $collect['length_fences'].' m' ?></span> - 
									<span class="badge badge-secondary"><?= $collect['length_hedges'].' m' ?></span>
									</td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Superficie fonctionnellement irrigu&eacute;e: </span></td>
									<td><span class="badge badge-secondary"><?= $collect['total_ha_irrigated'].' ha' ?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Parcelles: </span></td>
									<td><span class="badge badge-secondary"><?= $collect['plots'] ?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Superficie Moy/Parcelle: </span></td>
									<td><span class="badge badge-secondary"><?= $collect['plot_moy_area'].' m2' ?></span></td>
								</tr>
							</table>
						</div>
					</div>
