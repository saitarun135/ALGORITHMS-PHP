<?php
#https://www.programmingalgorithms.com/algorithm/interpolation-search/php/
function linearSearch($list, $data) {
	$low = 0;
	$high = count($list) - 1;
	$index = -1;

	while ($low <= $high) {
		$mid = (int)($low + ((($high - $low) / ($list[$high] - $list[$low])) * 
                ($data - $list[$low])));

		if ($list[$mid] == $data) {
			$index = $mid;
			break;
		}
		else {
			if ($list[$mid] < $data)
				$low = $mid + 1;
			else
				$high = $mid - 1;
		}
	}
	return $index;
}
/**
 * array must be in sorted form in linearserach
 */
$list = array(2,14, 25, 43,758,999,1200);
echo "The available list =".implode(",",$list)."\n";
$d=readline("Enter a data you want to search=");
$index = linearSearch($list, $d);
echo "The element present in index =".$index;
?>