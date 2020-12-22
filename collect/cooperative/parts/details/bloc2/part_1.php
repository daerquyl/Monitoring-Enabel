	<div class="card">
		<div class="card-header text-center text-white bg-dark">
			<h5 class="p-0 m-0"><i class="fa fa-group"></i> Membres </h5>
		</div>
		<div class="card-body">
			<table class="table table-bordered table-responsive table-sm">
				<thead>
					<tr>
						<th></th>
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
						<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Membres CA: </span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['ca_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['ca_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['ca_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['ca_women_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['ca_mr_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['ca_mr_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['ca_mr_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['ca_mr_women_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['ca_pvh_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['ca_pvh_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['ca_pvh_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['ca_pvh_women_member_gt35'] ?></span></td>
					</tr>
					<tr>
						<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Membres CS: </span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['cs_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['cs_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['cs_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['cs_women_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['cs_mr_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['cs_mr_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['cs_mr_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['cs_mr_women_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['cs_pvh_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['cs_pvh_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['cs_pvh_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['cs_pvh_women_member_gt35'] ?></span></td>
					</tr>
					<tr>
						<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Membres BE: </span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['be_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['be_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['be_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['be_women_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['be_mr_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['be_mr_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['be_mr_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['be_mr_women_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['be_pvh_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['be_pvh_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['be_pvh_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['be_pvh_women_member_gt35'] ?></span></td>
					</tr>
					<tr>
						<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Membres CSP: </span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['csp_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['csp_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['csp_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['csp_women_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['csp_mr_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['csp_mr_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['csp_mr_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['csp_mr_women_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['csp_pvh_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['csp_pvh_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['csp_pvh_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['csp_pvh_women_member_gt35'] ?></span></td>
					</tr>
					<tr>
						<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Membres CD: </span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['cd_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['cd_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['cd_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['cd_women_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['cd_mr_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['cd_mr_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['cd_mr_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['cd_mr_women_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['cd_pvh_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['cd_pvh_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['cd_pvh_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['cd_pvh_women_member_gt35'] ?></span></td>
					</tr>
					<tr>
						<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Membres: </span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['women_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['mr_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['mr_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['mr_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['mr_women_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['pvh_men_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(H) '.$collect['pvh_men_member_gt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['pvh_women_member_lt35'] ?></span></td>
						<td><span class="badge badge-secondary"><?= '(F) '.$collect['pvh_women_member_gt35'] ?></span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
