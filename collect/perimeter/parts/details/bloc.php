			<div class="row mx-auto bloc bloc1 active" data-next="bloc2">
				<?php require_once($collectType."/parts/details/bloc1.php"); ?>
			</div>
			<div class="row mx-auto bloc bloc2" style="display:none;" data-previous="bloc1" data-next="bloc3">
				<?php require_once($collectType."/parts/details/bloc2.php"); ?>
			</div>
			<div class="row mx-auto bloc bloc3" style="display:none;" data-previous="bloc2">
				<?php require_once($collectType."/parts/details/bloc3.php"); ?>
			</div>
