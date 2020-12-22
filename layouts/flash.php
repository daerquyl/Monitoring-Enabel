<?php if(isset($_SESSION['errMsg'])) {?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?php echo $_SESSION['errMsg']; unset($_SESSION['errMsg']); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<?php if(isset($_SESSION['success'])) {?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
