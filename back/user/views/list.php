<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<?php require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/layouts/header.php"); ?>
	<?php require_once("parts/action_panel.php"); ?>
	<div class="row mt-1">
		<div class="col-1"></div>
		<div class="col-10" id="list">	
		<?php require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/layouts/flash.php"); ?>
			<div class="card lead">
				<div class="card-header text-center text-white bg-dark">
					<h5 class="p-0 m-0"><i class="fa fa-group"></i> Utilisateurs</h5>
				</div>
				<div class="card-body">
					<?php require_once("parts/list.php"); ?>
				</div>
			</div>
		</div>
		<div class="col-1"></div>
		<?php require_once("parts/reset_modal.php"); ?>
		<?php require_once("parts/deletion_modal.php"); ?>
		<?php require_once("parts/form_modal.php"); ?>
	</div>
</div>
<script src="parts/reset.js"></script>
<script src="parts/delete.js"></script>
<script src="parts/search.js"></script>
<script src="parts/init_modify.js"></script>
<script src="parts/form_effect.js"></script>
<body>
<html>

