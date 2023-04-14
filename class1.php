<?php

    // Exemplo simples de classe 
    
    class Bicicleta {
      
      var $Id;
      var $Aro;
      var $Marcha;
      var $Marca;
      
      function imprimirDados(){
        
        echo 'O Id é: ' . $this->Id . "<br>";
        echo 'O aro é: ' . $this->Aro . "<br>";
        echo 'A marcha é: '. $this->Marcha . "<br>";
        echo 'A marca é: ' . $this->Marca . "<br>";
      }
      
    }
    
    $monark = new Bicicleta;
    
    $monark->Id = 1;
    $monark->Aro = 28;
    $monark->Marcha = FALSE;
    $monark->Marca = "Caloi";
    
    $monark->imprimirDados();
    
    
     
     

 ?>
