<?php 
$text = file_get_contents("collect/perimeter/parts/form_modal.php");
preg_match_all('/(id.*?name)/', $text, $matches, PREG_OFFSET_CAPTURE);
$output = preg_replace_callback('/(name=".*?")/', 
			function ($elmt){
				$ret = $elmt[0];
				for($i=0; $i<strlen($ret); $i++){
				  if($ret[$i] >= 'A' && $ret[$i] <= 'Z'){
					$ret = str_replace($ret[$i],"_".strtolower($ret[$i]),$ret);
				  }
				}
				return $ret;
			}, 
			$text);
echo $output;


?>