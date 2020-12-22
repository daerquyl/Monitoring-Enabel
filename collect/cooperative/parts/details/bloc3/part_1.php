	<div class="card">
		<div class="card-header text-center text-white bg-dark">
			<h5 class="p-0 m-0"><i class="fa fa-group"></i> Gouvernance </h5>
		</div>
		<div class="card-body">
			<div id='ag'>
				<h6>
					Nombre d'assembl&eacute;ee g&eacute;n&eacute;rale Pr&eacute;vu | R&eacute;alis&eacute; | Avec PV : 
					<span class="badge badge-secondary"><?= $collect['expected_ag'] ?></span>
					<span class="badge badge-secondary"><?= $collect['real_ag'] ?></span>
					<span class="badge badge-secondary"><?= $collect['pv_ag'] ?></span>
				</h6>
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
							<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Participants AG: </span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['ag_men_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['ag_men_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['ag_women_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['ag_women_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['ag_mr_men_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['ag_mr_men_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['ag_mr_women_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['ag_mr_women_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['ag_pvh_men_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['ag_pvh_men_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['ag_pvh_women_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['ag_pvh_women_participant_gt35'] ?></span></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id='ca'>
				<h6>
					Nombre de conseil d'administration Pr&eacute;vu | R&eacute;alis&eacute; | Avec PV : 
					<span class="badge badge-secondary"><?= $collect['expected_ca'] ?></span>
					<span class="badge badge-secondary"><?= $collect['real_ca'] ?></span>
					<span class="badge badge-secondary"><?= $collect['pv_ca'] ?></span>
				</h6>
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
							<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Participants CA: </span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['ca_men_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['ca_men_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['ca_women_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['ca_women_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['ca_mr_men_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['ca_mr_men_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['ca_mr_women_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['ca_mr_women_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['ca_pvh_men_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['ca_pvh_men_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['ca_pvh_women_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['ca_pvh_women_participant_gt35'] ?></span></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id='cd'>
				<h6>
					Nombre de conseil de surveillance Pr&eacute;vu | R&eacute;alis&eacute; | Avec PV : 
					<span class="badge badge-secondary"><?= $collect['expected_cs'] ?></span>
					<span class="badge badge-secondary"><?= $collect['real_cs'] ?></span>
					<span class="badge badge-secondary"><?= $collect['pv_cs'] ?></span>
				</h6>
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
							<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Participants CS: </span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['cs_men_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['cs_men_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['cs_women_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['cs_women_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['cs_mr_men_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['cs_mr_men_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['cs_mr_women_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['cs_mr_women_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['cs_pvh_men_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['cs_pvh_men_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['cs_pvh_women_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['cs_pvh_women_participant_gt35'] ?></span></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id='be'>
				<h6>
					Nombre de r&eacute;union Bureau Executif Pr&eacute;vu | R&eacute;alis&eacute; | Avec PV : 
					<span class="badge badge-secondary"><?= $collect['expected_be'] ?></span>
					<span class="badge badge-secondary"><?= $collect['real_be'] ?></span>
					<span class="badge badge-secondary"><?= $collect['pv_be'] ?></span>
				</h6>
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
							<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Participants BE: </span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['be_men_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['be_men_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['be_women_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['be_women_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['be_mr_men_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['be_mr_men_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['be_mr_women_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['be_mr_women_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['be_pvh_men_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(H) '.$collect['be_pvh_men_participant_gt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['be_pvh_women_participant_lt35'] ?></span></td>
							<td><span class="badge badge-secondary"><?= '(F) '.$collect['be_pvh_women_participant_gt35'] ?></span></td>
						</tr>
					</tbody>
				</table>
			</div>			
		</div>
	</div>
