<?php
function insertion_sort($my_array){
    $length=count($my_array);
    for($i=0;$i<$length;$i++){
        $value=$my_array[$i];
        $j=$i-1;
        while($j>=0 && $my_array[$j] >$value){
            $my_array[$j+1] = $my_array[$j];
			$j--;
         
        }
        $my_array[$j+1] = $value;
    }
    return $my_array;
}
$test_array=array(7,5,87,6,2,8,-8,85,121,1);
echo "original array: \n";
echo implode(",",$test_array);
echo "<br>";
echo "insertion order Algorithm:\n";
echo implode(",",insertion_sort($test_array));
?>