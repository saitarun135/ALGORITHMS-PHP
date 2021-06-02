<?php
class Algorithms{
   
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

    function interpolationSearch($list, $data) {
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
    function merge_sort($my_array){
        if(count($my_array)==1){return $my_array;}
        $mid=(count($my_array))/2;
        $left=array_slice($my_array,0,$mid);
        $right=array_slice($my_array,$mid);
        $left=$this->merge_sort($left);
        $right=$this->merge_sort($right);
        return $this->merge($left,$right);
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
    
    
}
?>