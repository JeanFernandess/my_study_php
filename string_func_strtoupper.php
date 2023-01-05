<?php
   //Ambos exemplos de uso da função strtoupper.
     
     
   //Exemplo 1
   
   $texto1 = <<<Text
   Todo programador precisa<br>
   separar um tempo para se<br> 
   dedicar a outros estudos<br> 
   de tecnologia.   
Text;

   echo strtoupper($texto1);
   echo "<br>";
   
   //Exemplo 2
   // 
   $texto2 = "Todo programador precisa
   separar um tempo para se 
   dedicar a outros estudos
   de tecnologia.";
   
   echo strtoupper($texto2);

 ?>
