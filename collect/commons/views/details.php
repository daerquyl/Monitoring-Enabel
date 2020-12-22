<html>
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/form_validator_css.php"); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<?php require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/layouts/header.php"); ?>
	<div class="row mb-4">
		<div class="col-12 p-0 m-0 text-center">
			<h4 style="color: rgb(85,90,90)"> 
				-- 
				Fiche <?= getCollectTypeDescription() ?> 
				<?= "<span class='badge badge-".getStatusColor($collect['status'])."' style='font-size:0.6em'>".getStatusDescription($collect['status'])."</span>"?>
				-- 
			</h4>
			<h6 class="mb-2">
				<a href="controller.php?path=list&record=<?=$collectType?>" style="font-size : 0.8em" class="text-danger font-weight-bold">Retour &agrave; la liste > </a>
			</h6>
		</div>

		<div class="col-12" id="main">	
		<?php require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/layouts/flash.php"); ?>
			<?php require_once($collectType."/parts/details/bloc.php"); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-12" id="module">
			<?php require_once($collectType."/parts/form_modal.php"); ?>
			<?php require_once("commons/parts/details/modals/submission_modal.php"); ?>
			<?php require_once("commons/parts/details/modals/deletion_modal.php"); ?>
			<?php require_once("commons/parts/details/modals/validation_modal.php"); ?>
			<?php require_once("commons/parts/details/modals/rejection_modal.php"); ?>
			<?php require_once("commons/parts/details/footer_action_panel.php"); ?>
		</div>
		<div class="col-12" id="module">
			<?php require_once("commons/parts/details/comments.php"); ?>
		</div>
	</div>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/form_validator_js.php"); ?>

<script src="commons/parts/details/modals/submit.js"></script>
<script src="commons/parts/details/modals/delete.js"></script>
<script src="commons/parts/details/modals/validate.js"></script>
<script src="commons/parts/details/modals/reject.js"></script>
<script src="commons/parts/details/slide_effect.js"></script>
<script src="commons/multiple_checkboxes_effect.js"></script>
<script src="commons/slide_form_effect.js"></script>
<script src="commons/site_form_effect.js"></script>
<script src="commons/dynamic_add.js"></script>
<?php require_once("commons/form_effect_utils.php"); ?>
<?php require_once($collectType."/parts/details/form_effect.php"); ?>
<body>
</html>
