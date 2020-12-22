				<div id="site" class="indicator table-responsive">	
					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th></th>
								<?php 
								foreach($sites as $site){
								?>
								<th style="font-size:0.8em"><?= $site['name'] ?></th>
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
								foreach($sites as $site){
									$indicator_value = $indicators[$indicator_key]['data']['site'][$site['name']] ?? "-";
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