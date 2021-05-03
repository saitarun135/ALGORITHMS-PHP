<?php
#https://www.hashbangcode.com/article/implementation-array-binary-search-php
function binarySearch($array, $value) {
    $left = 0;
    $right = count($array) - 1;
 
    while ($left <= $right) {
      $midpoint = (int) floor(($left + $right) / 2);
 
      if ($array[$midpoint] < $value) {
        $left = $midpoint + 1;
      } elseif ($array[$midpoint] > $value) {
        $right = $midpoint - 1;
      } else {
        return $midpoint;
      }
    }
    return NULL;
}
$array=array(1,2,3,4,5,6);
echo "original array".implode(",",$array);
echo "\n";
$data=readline("Enter the element=");
$result=binarySearch($array,$data);
if($result==NULL){echo "not found..";}
else{echo "searched element index is =".$result;}
?>