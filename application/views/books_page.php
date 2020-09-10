<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$num = 1;
   foreach($books as $mybook){
        
        echo "Book" .$num." : ".$mybook."</br>";
        $num++;

   }
?>

