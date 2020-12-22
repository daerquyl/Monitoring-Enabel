<?php
function setErrorMessage($msg){
	$errMsg = "D&eacute;sol&eacute;, une erreur est survenue pendant la mise &agrave; jour de l'organisme.";
	$_SESSION['errMsg'] = $msg;
}

function setSuccessMessage($smsg){
	$_SESSION['success'] = $smsg;
}

function setMessage($done, $errMsg, $successMsg){
	if(!$done){
		setErrorMessage($errMsg);
	}else{
		setSuccessMessage($successMsg);
	}
}