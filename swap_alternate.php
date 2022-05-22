<?php 
 $start =microtime(true);
 $data = [12,2,3,23,5,23];
 $size = sizeof($data);

  function alternate_number($arr , $size)
  {
	for($i=0;$i<$size;$i+=2) {
		if($i+1 < $size) {
			
			$temp = $arr[$i];
			$arr[$i] = $arr[$i+1];
			$arr[$i+1] =$temp;
		}
	}
	return $arr;
  }

  function print_array($arr , $size){
  	for($i=0;$i<$size;$i++) {
  		echo ' ' . $arr[$i];
	}
  }

  $swap = alternate_number($data,$size);
  $swap_size =sizeof($swap);
  print_array($swap,$swap_size);
?>