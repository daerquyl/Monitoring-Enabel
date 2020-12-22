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
		<div class="col-6">
			<form action="controller.php" method="GET">
				<select id="campaign_id" name="campaign_id">
					<?php
					foreach($campaigns as $campaign){
					?>
					<option value="<?= $campaign['id']?>"><?= $campaign['title'].'-'.$campaign['status']?></option>
					<?php
					}
					?>
				</select>
				<input type="submit" value="Rechercher"/>
			</form>
		</div>
		<div class="col-6 text-right">
			<?php if($is_active_campaign){ ?>
			<a href="controller.php?reload=true" class="text-light"><button class="btn btn-success">Recharger <i class="fa fa-refresh"></i></button></a>
			<?php } ?>
			<a href="/monitoring/logout.php" class="text-light"><button class="btn btn-secondary">D&eacute;connexion <i class="fa fa-sign-out"></i></button></a>
		</div>
	</div>
	<div class="row mt-3 mb-4">
		<div class="col-12">
			<div class="card lead">
				<div class="card-header text-center text-white bg-dark">
					<h5 class="p-0 m-0"><i class="fa fa-list"></i> Indicateurs - <span><?= $indicator_campaign ?></span></h5>
				</div>
				<div class="card-body">
					<script>
						$(document).ready(function(){
							$(".criteria").on("click",function(){
								var toCriteria = $(this).attr("data-criteria");
								$(".indicator").hide();
								$(".criteria").removeClass("btn-danger");
								$(this).addClass("btn-danger");
								$("#"+toCriteria).show();
							});
							$("#site-criteria").trigger("click");
						});
						
					</script>
					<div id="criteria-box" class="text-center mb-2">
						<button id="site-criteria" data-criteria="site" class="active criteria btn btn-secondary">
						Site <a href="controller.php?export=site&campaign_id=<?= $campaign_to_generate ?>" class="text-white"><i class="fa fa-sign-out"></i></a>
						</button>
						<button id="commune-criteria" data-criteria="commune" class="criteria btn btn-secondary">
						Commune  <a href="controller.php?export=commune&campaign_id=<?= $campaign_to_generate ?>" class="text-white"><i class="fa fa-sign-out"></i></a>
						</button>
						<button id="department-criteria" data-criteria="department" class="criteria btn btn-secondary">
						D&eacute;partement  <a href="controller.php?export=department&campaign_id=<?= $campaign_to_generate ?>" class="text-white"><i class="fa fa-sign-out"></i></a>
						</button>
						<button id="region-criteria" data-criteria="region" class="criteria btn btn-secondary">
						R&eacute;gion  <a href="controller.php?export=region&campaign_id=<?= $campaign_to_generate ?>" class="text-white"><i class="fa fa-sign-out"></i></a>
						</button>
						<button id="ong-criteria" data-criteria="ong" class="criteria btn btn-secondary">
						Organisme  <a href="controller.php?export=ong&campaign_id=<?= $campaign_to_generate ?>" class="text-white"><i class="fa fa-sign-out"></i></a>
						</button>
						<button id="project-criteria" data-criteria="project" class="criteria btn btn-secondary">
						Projet  <a href="controller.php?export=project&campaign_id=<?= $campaign_to_generate ?>" class="text-white"><i class="fa fa-sign-out"></i></a>
						</button>
					</div>
					<?php require_once("parts/siteIndicator.php"); ?>
					<?php require_once("parts/communeIndicator.php"); ?>
					<?php require_once("parts/departmentIndicator.php"); ?>
					<?php require_once("parts/regionIndicator.php"); ?>
					<?php require_once("parts/ongIndicator.php"); ?>
					<?php require_once("parts/projectIndicator.php"); ?>

				</div>
			</div>
		</div>
	</div>

</div>
<script>
</script>
<body>
</html>
