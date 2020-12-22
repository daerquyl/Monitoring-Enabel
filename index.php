<?php
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/guard.php");
?>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
	a:hover{
		text-decoration : none;
	}
	.menu-item-box:hover{
		box-shadow: 4px 2px 4px 2px  #aaa;
	}
	.menu-item-box-2:hover{
		box-shadow: 2px 1px 2px 1px  #aaa;
	}
	
	.hide-words{
		overflow: hidden; 
		white-space: nowrap; 
		text-overflow: ellipsis;
	}
</style>
</head>
<body>
<div class="container">
	<?php require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/layouts/header.php"); ?>
	<div class="row mt-3 mb-4">
		<div class="col-1"></div>
		<div class="col-10" id="main">
			<div class="row m-0">
				<div class="col-12 text-right">
					<p class="menu-item-box-2 bg-dark" style="display:inline-block">					
						<a href="/monitoring/logout.php" class="text-light"><button class="btn btn-secondary">D&eacute;connexion <i class="fa fa-sign-out"></i></button></a>
					</p>
				</div>
				<div class="col-12 text-right">
					<?php require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/layouts/flash.php"); ?>
				</div>
				<div class="col-12 col-md-4  mt-2 
				<?= check_page_ok($current_page_base."back/index.php") ? "" : "d-none" ?>">	
					<a href="back/index.php" class="menu-item">
						<div class="card lead menu-item-box">
							<div class="card-header text-center text-white bg-dark">
								<h5 class="p-0 m-0" ><i class="fa fa-cog"></i> </h5>
							</div>
							<div class="card-body font-weight-bold text-danger ">
								<p class="text-center pt-2 pb-2 hide-words">ADMINISTRATION</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-4 mt-2
				<?= check_page_ok($current_page_base."collect/index.php") ? "" : "d-none" ?>">	
					<a href="collect/index.php" class="menu-item">
						<div class="card lead menu-item-box">
							<div class="card-header text-center text-white bg-dark">
								<h5 class="p-0 m-0" ><i class="fa fa-list"></i> </h5>
							</div>
							<div class="card-body font-weight-bold text-danger ">
								<p class="text-center pt-2 pb-2 hide-words">COLLECTES</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-4 mt-2
				<?= check_page_ok($current_page_base."indicator/controller") ? "" : "d-none" ?>">		
					<a href="indicator/controller" class="menu-item">
						<div class="card lead menu-item-box">
							<div class="card-header text-center text-white bg-dark">
								<h5 class="p-0 m-0" ><i class="fa fa-bar-chart"></i> </h5>
							</div>
							<div class="card-body font-weight-bold text-danger">
								<p class="text-center pt-2 pb-2 hide-words">INDICATEURS</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-4 mt-2">		
					<a href="#" data-toggle="modal" data-target="#compte_modal" class="menu-item">
						<div class="card lead menu-item-box">
							<div class="card-header text-center text-white bg-dark">
								<h5 class="p-0 m-0" ><i class="fa fa-user"></i> </h5>
							</div>
							<div class="card-body font-weight-bold text-danger">
								<p class="text-center pt-2 pb-2 hide-words">COMPTE</p>
							</div>
						</div>
					</a>
				</div>				
				<!--<div class="col-12 col-md-4 mt-2">		
					<a href="" class="menu-item">
						<div class="card lead menu-item-box">
							<div class="card-header text-center text-white bg-dark">
								<h5 class="p-0 m-0" ><i class="fa fa-file"></i> </h5>
							</div>
							<div class="card-body font-weight-bold text-danger">
								<p class="text-center pt-2 pb-2 hide-words">DOCUMENTS</p>
							</div>
						</div>
					</a>
				</div>	-->			
			</div>
		</div>
		<div class="col-1"></div>
		<div class="modal fade" id="compte_modal" tabindex="-1" role="dialog" aria-labelledby="compteModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="delete">
				<div class="modal-content">
					<form action="controller.php?path=update_password" method="post">
						<div class="modal-header bg-dark text-white">
							<h5 class="modal-title" id="compte_modal_label">Informations compte</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">	
							<div class="form-group">
								<label class="font-weight-bold mb-0 text-secondary">Nom & Prenoms</label>
								<input type="text"  class="form-control" disabled value="<?php echo $principal['name']; ?>"/>
							</div>
							<div class="form-group">
								<label class="font-weight-bold mb-0 text-secondary">Organisation</label>
								<input type="text"  class="form-control" disabled value="<?php echo $principal['organization']; ?>"/>
							</div>
							<div class="form-group">
								<label class="font-weight-bold mb-0 text-secondary">Mot de passe</label>
								<input type="password"  class="form-control" name="password" required />
							</div>
							<div class="form-group">
								<label class="font-weight-bold mb-0 text-secondary">Nouveau mot de passe</label>
								<input type="password"  class="form-control" name="npassword" required />
							</div>
							<div class="form-group">
								<label class="font-weight-bold mb-0 text-secondary">Confirmation mot de passe</label>
								<input type="password"  class="form-control" name="npassword2" required />
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal">Retour</button>
							<button type="submit" class="btn btn-outline-danger text-dark">Modifier le mot de passe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
</script>
<body>
</html>
