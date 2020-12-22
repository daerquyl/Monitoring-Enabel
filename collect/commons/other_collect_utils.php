<?php

function getETP($type, $sexe, $is_adult, $collect){
	/*$index_base = "employed";
	$etp_base = $collect[$type."_".$index_base."_".$segment];
	
	//REVOIR CALCUL PERIODE DATE ICI
	$date1 = new DateTime($collect['exploitation_end_date']);
	$date2 = new DateTime($collect['exploitation_start_date']);
	$interval = $date1->diff($date2);
	$campaign_period = $interval->days;
	$etp = 	($etp_base * $campaign_period) / 365;
	
	return round($etp);*/
	
	return 1;
}

?>
