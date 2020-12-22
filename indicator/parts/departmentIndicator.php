				<div id="department" class="indicator table-responsive">	
					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th></th>
								<?php 
								foreach($departments as $department){
								?>
								<th style="font-size:0.8em"><?= $department['name'] ?></th>
								<?php
								}
								?>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($indicators_keys as $indicator_key) {
							?>
							<tr>
								<td style="font-size:0.8em"><?= $indicators[$indicator_key]['description'] ?></td>
								<?php 
								foreach($departments as $department){
									$indicator_value = $indicators[$indicator_key]['data']['department'][$department['name']] ?? "-";
									$indicator_prefix = $indicators[$indicator_key]['prefix'] ?? "";
									$indicator_prefix = (strpos($indicator_value,"N/A") === false) ? $indicator_prefix : "";
								?>
								<td style="font-size:0.8em"><?= $indicator_value.$indicator_prefix ?></td>
								<?php
								}
								?>
							</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>