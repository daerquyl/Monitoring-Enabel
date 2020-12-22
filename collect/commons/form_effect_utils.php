<?php
	function getTrueOrFalse($value){
		return ($value == 1) ? "true" : (($value == 0) ? "false" : (($value == 2) ? "-" : "NA") );
	}
	function getBoolTrueOrFalse($value){
		return ($value == "true") ? true : false;
	}
	function getOuiOrNon($value){
		return ($value == 1) ? "Oui" : (($value == 0) ? "Non" : (($value == 2) ? "-" : "N/A") );
	}
	
?>