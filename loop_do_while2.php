<?php 

     //Exercicio de fixação 

$numero = 10;

do {

    if($numero % 2 == 0){
    
      echo 'O numero '. $numero . " é PAR. <br>";
       
    }else{
    
      echo 'O numero ' . $numero . " é IMPAR. <br>";
      
    }
    
  $numero--;
  
} while ($numero != 0);

?>
