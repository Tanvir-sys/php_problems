<?php
  
  function binarySearch( Array $arr, $num){
      if(count($arr)===0){
          return false;
           
      }
      $low=0;
      $high=count($arr)-1;
      while($low<=$high){
          $mid=floor(($low+$high)/2);
          if($num==$arr[$mid]){
              return true;
          }
          if($mid<$arr[$mid]){
              $high=$mid-1;
          }else{
              $low=$mid+1;
          }
      }
      return false;




  }

  $num_arr=array(1,2,4,5,7,8,10,56,76);
  $element=10;
   if(binarySearch($num_arr,$element)){
       echo $element.'Searching Element Exist';

   }else {
       echo 'searching Element doesnot exist';
   }











?>