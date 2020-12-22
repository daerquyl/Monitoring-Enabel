<?php

function strip_invalid_utf8_chars($str){
	return iconv('UTF-8', 'UTF-8//IGNORE', $str);
}

function strip_invalid_utf8_array($elements){
	foreach($elements as &$element){
		$element = iconv('UTF-8', 'UTF-8//IGNORE', $element);
	}
	return $elements;
}

function filterAllowedKeys($allowed, $base_array){
	return array_filter(
		$base_array,
		function ($key) use ($allowed) {
			return in_array($key, $allowed);
		},
		ARRAY_FILTER_USE_KEY
	);
}

if (!function_exists('array_key_first')) {
    function array_key_first(array $arr) {
        foreach($arr as $key => $unused) {
            return $key;
        }
        return NULL;
    }
}

/**
 * Function that groups an array of associative arrays by some key.
 * 
 * @param {String} $key Property to sort by.
 * @param {Array} $data Array that stores multiple associative arrays.
 */
function group_by($key, $data) {
    $result = array();

    foreach($data as $val) {
        if(array_key_exists($key, $val)){
            $result[$val[$key]][] = $val;
        }else{
            $result[""][] = $val;
        }
    }

    return $result;
}

//Convert associative array to csv string
function convert_to_csv_array($data,$header,$fields){
	$csv_data = [];
	if($data !=null && count($data) >= 0){

		$csv_data[0] = $header;		
		foreach($data as $line){
			$line_csv = "";
			foreach($fields as $field){
				$line_csv .= ";".str_replace(";"," ",$line[$field]);
			}
			$line_csv = substr($line_csv,1);
			$csv_data[$line['id']] = $line_csv;
		}
	}
	return $csv_data;
}

//Convert array to lines
function format_to_lines($data_array){
	$lines = "";
	foreach($data_array as $line){
		$lines .= $line."\n";
	}
	return $lines;
}

//Complete each line with enough empty data to match first line column size
function padd_csv_array($data_array){
	$new_data_array = [];
	if($data_array !=null && count($data_array) >= 0){
		$first_line = $data_array[0];
		$columns_count = substr_count($first_line,";");
		foreach($data_array as $key => $line){
			$new_data_array[$key] = pad_csv_line($line, $columns_count);
		}
	}
	return $new_data_array;
}

function pad_csv_line($line, $columns_count){
	$line_columns_count = substr_count($line,";");
	$count_difference = $columns_count - $line_columns_count;
	for($i=1; $i<=$count_difference; $i++){
		$line .= ";";
	}
	return $line;
}

//Save File
function save_unique_file($name_base, $ext, $data){
	$id = uniqid();
	$document = array(
		'name' => $name_base.".".$ext,
		'id' => $id,
		'path' => $_SERVER['DOCUMENT_ROOT']."/monitoring/uploads/".$id
	);
	$file = fopen($document['path'],"w+");
	fwrite($file, $data);
	fclose($file);
	
	return $document;
}