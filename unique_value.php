<?php

function find_unique_value($arr,$size) {
	$ans = 0;
	foreach ($arr as $key => $value) {
		$ans=$ans^$value;
	}
	return $ans;	
}

$data = [1,1,2,3,2,3,4];
$size = sizeof($data);
	
echo find_unique_value($data,$size);
?>