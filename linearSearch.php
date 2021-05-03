<?php
#https://www.programmingalgorithms.com/algorithm/linear-search/php/
function linearSearch($list,$data){
    $index=-1;
$counter=count($list)-1;
for($i=0;$i<$counter;$i++){
    if($data==$list[$i]){
        $index=$i;
    }
}
return $index;
}
$list=array(5,8,10,28,30);
echo "The index of the element is ".linearSearch($list,28);


?>