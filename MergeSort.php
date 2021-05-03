<?php
function merge_sort($my_array){
	if(count($my_array)==1){return $my_array;}
    $mid=(count($my_array))/2;
    $left=array_slice($my_array,0,$mid);
    $right=array_slice($my_array,$mid);
    $left=merge_sort($left);
    $right=merge_sort($right);
    return merge($left,$right);
}
function merge($left, $right){
	$result = array();
    while(count($left) >0 && count($right) >0){
        if($left[0] > $right[0]){
            $result[]=$right[0];
            $right=array_slice($right,1);           
        }
        else{
            $result[]=$left[0];
            $left=array_slice($left,1);
            }    
    }
    while(count($left) > 0){
        $result[]=$left[0];
        $left=array_slice($left,1);
      
    }
    while (count($right) > 0){
		$result[] = $right[0];
		$right = array_slice($right, 1);
       
	}
	return $result;	
}
$test_array=array(7,23,4,46,467);
//$test_array = array(35,28,26,4,8,3);
echo "Array before using any algorithm: ";
foreach($test_array as $original){echo $original." ";}
echo "<br>";
echo "After merge-sort  :";
echo implode(",",merge_sort($test_array))."\n";
/**
 * f we have an array of elements, we can use the implode() function to join them all to form one string. 
 * We basically join array elements with a string. Just like join() function , 
 * implode() function also returns a string formed from the elements of an array
 */


?>