<?php





 function formataBD($data){
   $data=str_split($data);
   //12/01/1990
   
   return  $data[6].$data[7].$data[8].$data[9].'-'.$data[3].$data[4].'-'.$data[0].$data[1];
 }
 function formataVisao($data){
    $data=str_split($data);
   // 2019-01-29
    
    return  $data[8].$data[9].'/'.$data[5].$data[6].'/'.$data[0].$data[1].$data[2].$data[3];
  }
 function encript($data){
     return base64_encode($data);
 }
 function decrypt($data){
     return base64_decode($data);
 }



   