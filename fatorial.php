<?php

function fatorial(int $num){
   
   if ($num == 1){
      return 1;
   }
   
   return $num * fatorial($num - 1);
}


echo fatorial(4);