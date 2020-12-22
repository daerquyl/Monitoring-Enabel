<div class="card">
	<div class="card-header text-center text-white bg-dark">
		<h5 class="p-0 m-0"><i class="fa fa-money"></i> Compte d'exploitation</h5>
	</div>
	<div class="card-body">
		<table class="table-responsive">	
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Chiffre d'affaire : </span></td>
				<td><span class="text-danger"><?= $collect['ca'] ?> FCFA</span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Charges salariales : </span></td>
				<td><span class="text-danger"><?= $collect['salary_expenses'] ?> FCFA</span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Autres charges : </span></td>
				<td><span class="text-danger"><?= $collect['other_expenses'] ?> FCFA</span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Produits d'exploitation : </span></td>
				<td><span class="text-danger"><?= $collect['incomes'] ?> FCFA</span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Revenue Net d'exploitation : </span></td>
				<td><span class="text-danger"><?= $collect['net_revenues'] ?> FCFA</span></td>
			</tr>		
			<tr>
				<td class="p-1 pl-3 pr-3"><span class="font-weight-bold">Marge b&eacute;n&eacute;ficiaire : </span></td>
				<td><span class="text-danger"><?= $collect['net_earnings'] ?> FCFA</span></td>
			</tr>		
		</table>
	</div>
</div>
