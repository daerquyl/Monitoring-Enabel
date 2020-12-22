<?php
if(isset($rejects) && count($rejects) > 0){
?>
	<h5 class="text-danger">Motifs de rejets</h5>
	<hr />
	<?php
	foreach($rejects as $reject){
	?>
	<div>
		<h6 class="">
			- <span class="font-weight-bold"><?=$reject['date_creation']?></span>
			Par <i><?=$reject['creator_name']?></i> : 
			<?=$reject['reason']?>
		</h6>
	</div>
	<?php
	}
}
?>