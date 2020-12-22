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
	.menu-item:hover{
		text-decoration : none;
	}
	
	.menu-item-box:hover{
		box-shadow: 4px 2px 4px 2px  #aaa;
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
					<a href="/monitoring/logout.php" class="text-light"><button class="btn btn-secondary">D&eacute;connexion <i class="fa fa-sign-out"></i></button></a>
				</div>
				<div class="col-12 col-md-4 col-lg-3 mt-4	
					<?= check_page_ok($current_page_base."site/controller") ? "" : "d-none" ?>">	
					<a href="site/controller?path=list" class="menu-item">
						<div class="card lead menu-item-box">
							<div class="card-header text-center text-white bg-dark">
								<h5 class="p-0 m-0" ><i class="fa fa-university"></i> </h5>
							</div>
							<div class="card-body font-weight-bold text-danger ">
								<p class="text-center pt-2 pb-2 hide-words" >SITES</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-4 col-lg-3 mt-4">	
					<a href="controller?path=list&record=perimeter" class="menu-item">
						<div class="card lead menu-item-box">
							<div class="card-header text-center text-white bg-dark">
								<h5 class="p-0 m-0" ><i class="fa fa-map"></i> </h5>
							</div>
							<div class="card-body font-weight-bold text-danger ">
								<p class="text-center pt-2 pb-2 hide-words">PERIMETRES IRRIGUES</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-4 col-lg-3 mt-4">	
					<a href="controller?path=list&record=cooperative" class="menu-item">
						<div class="card lead menu-item-box">
							<div class="card-header text-center text-white bg-dark">
								<h5 class="p-0 m-0" ><i class="fa fa-group"></i> </h5>
							</div>
							<div class="card-body font-weight-bold text-danger">
								<p class="text-center pt-2 pb-2 hide-words">ORGANISATIONS D'USAGERS DES PERIMETRES IRRIGUES</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-4 col-lg-3 mt-4">	
					<a href="controller?path=list&record=enterprise" class="menu-item">
						<div class="card lead menu-item-box">
							<div class="card-header text-center text-white bg-dark">
								<h5 class="p-0 m-0" ><i class="fa fa-university"></i> </h5>
							</div>
							<div class="card-body font-weight-bold text-danger">
								<p class="text-center pt-2 pb-2 hide-words">ENTREPRISES</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-4 col-lg-3 mt-4">	
					<a href="controller?path=list&record=exploitation" class="menu-item">
						<div class="card lead menu-item-box">
							<div class="card-header text-center text-white bg-dark">
								<h5 class="p-0 m-0" ><i class="fa fa-industry"></i> </h5>
							</div>
							<div class="card-body font-weight-bold text-danger">
								<p class="text-center pt-2 pb-2 hide-words">EXPLOITATION AGRICOLE</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="col-1"></div>
	</div>
</div>
<script>
</script>
<body>
</html>
