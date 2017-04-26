<?php
function bubble($array){
   $len = count($array);
   for($i=0;$i<$len;$i++){
      for($j=$i+1;$j<$len;$j++){
         if($array[$i] > $array[$j] ){
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
         }
      }
   }
    
    return $array;
   
}


print_r(bubble(array(10, 9, 8, 7, 80,6, 5, 4, 3, 2,13, 1)));