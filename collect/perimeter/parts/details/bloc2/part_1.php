					<div class="card">
						<div class="card-header text-center text-white bg-dark">
							<h5 class="p-0 m-0"><i class="fa fas fa-exclamation-circle"></i> Etat des locaux </h5>
						</div>
						<div class="card-body">
							<table class="table-responsive">
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Hangars: </span></td>
									<td><span class="badge badge-secondary"><?= '(F) '.$collect['functional_sheds'] ?></span> - <span class="badge badge-secondary"><?= '(NF) '.$collect['non_functional_sheds'] ?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Bureaux: </span></td>
									<td><span class="badge badge-secondary"><?= '(F) '.$collect['functional_offices'] ?></span> - <span class="badge badge-secondary"><?= '(NF) '.$collect['non_functional_offices'] ?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Magasins de stockage: </span></td>
									<td><span class="badge badge-secondary"><?= '(F) '.$collect['functional_deposits'] ?></span> - <span class="badge badge-secondary"><?= '(NF) '.$collect['non_functional_deposits'] ?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Locaux techniques: </span></td>
									<td><span class="badge badge-secondary"><?= '(F) '.$collect['functional_locals'] ?></span> - <span class="badge badge-secondary"><?= '(NF) '.$collect['non_functional_locals'] ?></span></td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Chambres froides: </span></td>
									<td><span class="badge badge-secondary"><?= '(F) '.$collect['functional_cold_rooms'] ?></span> - <span class="badge badge-secondary"><?= '(NF) '.$collect['non_functional_cold_rooms'] ?></span></td>
								</tr>
							</table>
						</div>
					</div>
