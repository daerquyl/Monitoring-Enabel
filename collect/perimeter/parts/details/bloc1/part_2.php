					<div class="card">
						<div class="card-header text-center text-white bg-dark">
							<h5 class="p-0 m-0"><i class="fa fa-users"></i> Nombres exploitants </h5>
						</div>
						<div class="card-body">
							<table class="table-responsive" >
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Total : </span></td>
									<td>
									<span class="badge badge-secondary"><?= '(JH) '.$collect['men_workers_lt35'] ?></span> - <span class="badge badge-secondary"><?= '(JF) '.$collect['women_workers_lt35'] ?></span> -
									<span class="badge badge-secondary"><?= '(H) '.$collect['men_workers_gt35'] ?></span> - <span class="badge badge-secondary"><?= '(F) '.$collect['women_workers_gt35'] ?></span>
									</td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Avec Handicap: </span></td>
									<td>
									<span class="badge badge-secondary"><?= '(JH) '.$collect['handicap_men_workers_lt35'] ?></span> - <span class="badge badge-secondary"><?= '(JF) '.$collect['handicap_women_workers_lt35'] ?></span> - 
									<span class="badge badge-secondary"><?= '(H) '.$collect['handicap_men_workers_gt35'] ?></span> - <span class="badge badge-secondary"><?= '(F) '.$collect['handicap_women_workers_gt35'] ?></span>
									</td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold"> Migrant de retour: </span></td>
									<td>
									<span class="badge badge-secondary"><?= '(JH) '.$collect['migrant_men_workers_lt35'] ?></span> - <span class="badge badge-secondary"><?= '(JF) '.$collect['migrant_women_workers_lt35'] ?></span> - 
									<span class="badge badge-secondary"><?= '(H) '.$collect['migrant_men_workers_gt35'] ?></span> - <span class="badge badge-secondary"><?= '(F) '.$collect['migrant_women_workers_gt35'] ?></span>
									</td>
								</tr>
							</table>
						</div>
					</div>
					
					<div class="card mt-3">
						<div class="card-header text-center text-white bg-dark">
							<h5 class="p-0 m-0"><i class="fa fa-users"></i> Superficie en production continue par </h5>
						</div>
						<div class="card-body">
							<table class="table-responsive" >
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold"> Hommes / Femmes : </span></td>
									<td>
									<span class="badge badge-secondary"><?= '(JH) '.$collect['total_ha_running_men_lt35'] ?></span> - <span class="badge badge-secondary"><?= '(JF) '.$collect['total_ha_running_women_lt35'] ?></span>- 
									<span class="badge badge-secondary"><?= '(H) '.$collect['total_ha_running_men_gt35'] ?></span> - <span class="badge badge-secondary"><?= '(F) '.$collect['total_ha_running_women_gt35'] ?></span>
									</td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">H/F avec Handicap: </span></td>
									<td>
									<span class="badge badge-secondary"><?= '(JH) '.$collect['total_ha_running_pvh_men_lt35'] ?></span> - <span class="badge badge-secondary"><?= '(JF) '.$collect['total_ha_running_pvh_women_lt35'] ?></span> -
									<span class="badge badge-secondary"><?= '(H) '.$collect['total_ha_running_pvh_men_gt35'] ?></span> - <span class="badge badge-secondary"><?= '(F) '.$collect['total_ha_running_pvh_women_gt35'] ?></span>
									</td>
								</tr>
								<tr>
									<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">H/F migrant de retour: </span></td>
									<td>
									<span class="badge badge-secondary"><?= '(JH) '.$collect['total_ha_running_mr_men_lt35'] ?></span> - <span class="badge badge-secondary"><?= '(JF) '.$collect['total_ha_running_mr_women_lt35'] ?></span> - 
									<span class="badge badge-secondary"><?= '(H) '.$collect['total_ha_running_mr_men_gt35'] ?></span> - <span class="badge badge-secondary"><?= '(F) '.$collect['total_ha_running_mr_women_gt35'] ?></span>
									</td>
								</tr>
							</table>
						</div>
					</div>