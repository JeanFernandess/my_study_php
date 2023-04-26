<?php
     // Pratica de constantes no php
     
    define("MEU_SALARIO", "1.200");
    define("MEU_ALUGUEL", "200");
    define("MEU_CONSUMO", "700");
    
    echo MEU_SALARIO. "<br>";
    echo MEU_ALUGUEL. "<br>";
    echo MEU_CONSUMO. "<br>";
    echo "<br>";
    
    if(MEU_SALARIO < 1000){
      echo 'O senhor precisa ganhar mais!';
    }else{
      echo 'O senhor tem um excelente trabalho!';
    }
    
     

 ?>
