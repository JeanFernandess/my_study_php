<?php
   
   //Exemplo 1 de definição de um array linear
   $endereco = array("Rua da laranjeiras<br>","Numero: 1234<br>","Bairro das amebas<br>");
   
   foreach($endereco as $dados_endereco)
   {
     echo $dados_endereco;
   }
   
   echo "<br>";
   
   //Exemplo 2 de um array linear
   $signos[] = "aries<br>";
   $signos[] = "touro<br>";
   $signos[] = 'gemeos';
   
   foreach($signos as $signo)
   {
     echo $signo;
   }

 ?>