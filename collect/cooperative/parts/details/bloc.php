			<div class="row mx-auto bloc bloc1 active" data-next="bloc2">
				<?php require_once($collectType."/parts/details/bloc1.php"); ?>
			</div>
			<div class="row mx-auto bloc bloc2" style="display:none;" data-previous="bloc1" data-next="bloc3">
				<?php require_once($collectType."/parts/details/bloc2.php"); ?>
			</div>
			<div class="row mx-auto bloc bloc3" style="display:none;" data-previous="bloc2"  data-next="bloc4">
				<?php require_once($collectType."/parts/details/bloc3.php"); ?>
			</div>
			<div class="row mx-auto bloc bloc4" style="display:none;" data-previous="bloc3"  data-next="bloc5">
				<?php require_once($collectType."/parts/details/bloc4.php"); ?>
			</div>			
			<div class="row mx-auto bloc bloc5" style="display:none;" data-previous="bloc4" data-next="bloc6">
				<?php require_once($collectType."/parts/details/bloc5.php"); ?>
			</div>
			<div class="row mx-auto bloc bloc6" style="display:none;" data-previous="bloc5">
				<?php require_once($collectType."/parts/details/bloc6.php"); ?>
			</div>
