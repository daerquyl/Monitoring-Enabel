	<div class="card">
		<div class="card-header text-center text-white bg-dark">
			<h5 class="p-0 m-0"><i class="fa fa-bullseyes"></i> Acc&eacute;s aux services financiers </h5>
		</div>
		<div class="card-body">
			<div>
				<span class="font-weight-bold">Sollicitation de cr&eacute;dit: </span><span><?= getOuiOrNon($collect['credit_request']) ?></span>
			</div>

			<?php 
			$credits = $collect['credit'];
			foreach($credits as $credit){
				if(!empty(trim(str_replace("-","",$credit['financial_institution'])))){
			?>
			<div class="border border-light">
				<table class="table table-bordered table-responsive table-sm" >
					<thead class="">
						<tr>
							<th class="text-center">Prestataire</th>
							<th class="text-center">Objet</th>
							<th class="text-center">Montant</th>
							<th class="text-center">Taux d'int&eacute;r&ecirc;t</th>
							<th class="text-center">Dur&eacute;e</th>
							<th class="text-center">Type de remboursement</th>
							<th class="text-center">Mode de remboursement</th>
							<th class="text-center">Etat des remboursements</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center"><span class="text-danger"><?= $credit['financial_institution'] ?></span></td>
							<td class="text-center"><span class="badge badge-secondary"><?= $credit['credit_object'] ?></span></td>
							<td class="text-center"><span class="text-danger"><?= $credit['credit_amount'] ?> CFA</span></td>
							<td class="text-center"><span class="badge badge-secondary"><?= $credit['credit_rate'] ?> %</span></td>
							<?php
								if(getTrueOrFalse($credit['credit_request_ok']) != "false"){
							?>
							<td class="text-center"><span class="badge badge-secondary"><?= $credit['credit_repayment_type']  ?></span></td>
							<td class="text-center"><span class="badge badge-secondary"><?= $credit['credit_repayment_mode'] ?></span></td>
							<td class="text-center"><span class="badge badge-secondary"><?= $credit['credit_payment_status'] ?></span></td>
							<?php
								}else{
							?>
							<td class="text-center"><span class="badge badge-secondary"> - </span></td>
							<td class="text-center"><span class="badge badge-secondary"> - </span></td>
							<td class="text-center"><span class="badge badge-secondary"> - </span></td>
							<?php
								}
							?>						
							</tr>
					</tbody>
				</table>
				<hr />
			</div>
			<?php 
				}
			}
			?>
		</div>
	</div>