<?php 

$re = '/(.*,)/m';
$str = '

support_id,
provider,
module,
categorie ,
type ,
men_beneficiary_lt35,
men_beneficiary_gt35,
women_beneficiary_lt35,
women_beneficiary_gt35,
mr_men_beneficiary_lt35,
mr_men_beneficiary_gt35,
mr_women_beneficiary_lt35,
mr_women_beneficiary_gt35,
pvh_men_beneficiary_lt35,
pvh_men_beneficiary_gt35,
pvh_women_beneficiary_lt35,
pvh_women_beneficiary_gt35,
support_collect_id
';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
$output = preg_replace_callback($re,
			function ($elmt){
				$ret = "'".str_replace(",","",$elmt[0])."',<br />";
				return $ret;
			}, 
			$str);
echo $output;
