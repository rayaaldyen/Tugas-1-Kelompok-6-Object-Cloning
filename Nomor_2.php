<?php  
 class Rumus {  
      var $panjang;  
      var $lebar;  
      function __construct($x,$y) {  
      $this->panjang =$x;  
      $this->lebar =$y;       
      }  
      function luas() {  
           return $this->panjang * $this->lebar;  
      }  
      function __clone() {  
           $this->panjang++;  
      }  
 }  
 $rumus1= new Rumus(6,7);  
 $rumus2 = clone $rumus1;  
 echo "Hasil rumus1 dan rumus2 setelah cloning: \n";   
 echo "Luas dari rumus1 = ".$rumus1->luas()."\n";  
 echo "Luas dari rumus2 = ".$rumus2->luas()."\n";  
 ?>