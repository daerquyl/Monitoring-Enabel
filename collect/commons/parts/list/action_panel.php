	<div class="row mt-3">
		<div class="col-1"></div>
		<div class="col-3 action-panel">
			<p>
				<input id="collect-search" type="text"  value="" placeholder=" Recherche"/>
			</p>
		</div>
		<div class="col-7 action-panel text-right">
			<p class="d-none d-md-block p-0 mb-0">
				<a href="" data-toggle="modal" data-target="#export_modal" class=""><button class="text-muted btn btn-light"><i class="fa fa-file-excel-o"></i> Archives</button></a>
				<a href="controller?path=export&record=<?=$collectType?>" class=""><button class="text-success btn btn-light"><i class="fa fa-file-excel-o"></i> Exporter</button></a>
				<a href="" class="text-light <?= canCreate()? "" : "d-none" ?>" data-toggle="modal" data-target="#<?= $collectType ?>_modal"><button class="create-link btn btn-danger"><i class="fa fa-plus"></i> Nouveau</button></a>
				<a href="controller?path=regional_list&record=<?=$collectType?>" 
					class="text-light
					<?= check_page_ok($current_page_base."controller?path=regional_list") ? "" : "d-none" ?>">
					<button class="btn btn-secondary"><i class="fa fa-database"></i> Aggr&eacute;gation</button>
				</a>
				<a href="/monitoring/logout.php" class="text-light"><button class="btn btn-secondary">D&eacute;connexion <i class="fa fa-sign-out"></i></button></a>
			</p>
			<p class="d-md-none p-0 mb-0">
				<a href="" data-toggle="modal" data-target="#export_modal" class=""><button class="text-success btn btn-light"><i class="fa fa-file-excel-o"></i> </button></a>
				<a href="" class="text-light <?= canCreate()? "" : "d-none" ?>" data-toggle="modal" data-target="#<?= $collectType ?>_modal"><button class="create-link btn btn-danger"><i class="fa fa-plus"></i></button></a>
				<a href="controller?path=regional_list&record=<?=$collectType?>" 
					class="text-light
					<?= check_page_ok($current_page_base."controller?path=regional_list") ? "" : "d-none" ?>">
					<button class="btn btn-secondary"><i class="fa fa-database"></i></button>
				</a>
				<a href="/monitoring/logout.php" class="text-light"><button class="btn btn-secondary"><i class="fa fa-sign-out"></i></button></a>
			</p>		
		</div>
		<div class="col-1"></div>
	</div>