<?php
   $L = readline();
   $C = readline();
   if($L%2 != 0){
       if($C%2 != 0){
           echo "1\n";
       }
       else{
           echo "0\n";
       }
   }
   if($L%2 == 0){
       if($C%2 == 0){
           echo "1\n";
       }
       else{
           echo "0\n";
       }
   }
?>