<?php

function mdc(int $m,int $n)
{
      if($n>$m){
         $temp = $n;
         $n = $m;
         $m = $temp;
      }

       if($n == 0){
          return $m;
       }
       
       return mdc($n,$m%$n);
          
}


echo mdc(16,8);