	<div class="row mt-3">
		<div class="col-1"></div>
		<div class="col-3 action-panel">
			<p>
				<input id="<?= $collectType ?>-search" type="text"  value="" placeholder=" Recherche"/>
			</p>
		</div>
		<div class="col-7 action-panel text-right">
			<p class="d-none d-md-block p-0 mb-0">
				<a href="controller?path=regional_list&record=<?=$collectType?>" class="text-light"><button class="btn btn-secondary"><i class="fa fa-database"></i> Regional</button></a>
				<a href="/monitoring/logout.php" class="text-light"><button class="btn btn-secondary">D&eacute;connexion <i class="fa fa-sign-out"></i></button></a>
			</p>
			<p class="d-md-none p-0 mb-0">
				<a href="" class="text-light" data-toggle="modal" data-target="#<?= $collectType ?>_modal"><button class="create-link btn btn-danger"><i class="fa fa-plus"></i></button></a>
				<a href="/monitoring/logout.php" class="text-light"><button class="btn btn-secondary"><i class="fa fa-caret-square-o-left"></i></button></a>
				<a href="/monitoring/logout.php" class="text-light"><button class="btn btn-secondary"><i class="fa fa-sign-out"></i></button></a>
			</p>		
		</div>
		<div class="col-1"></div>
	</div>