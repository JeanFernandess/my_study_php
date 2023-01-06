<?php
   /*Essa e mais uma forma de atribuir valores
     em um array multidimensional (matriz)
    */
 
 
 $motos ['Honda']['Adicional'] = 'Freio a disco';
 $motos ['Honda']['Cor'] = 'Vermelha';
 $motos ['Honda']['Modelo'] = 'Titan cg160';

 
 //Interação em uma matriz

 foreach($motos as $moto => $Caracteristicas)
 {
   echo "Modelo $moto <br>";
   foreach($Caracteristicas as $Caracteristica => $Valor)
   {
     echo "Caracteristica $Caracteristica => $Valor <br>";
   }
 }
 
 ?>
