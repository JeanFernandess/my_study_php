<?php
   
   //Exemplo 1 de definição de um array linear
   $endereco = array("Rua da laranjeiras<br>","Numero: 1234<br>","Bairro das amebas<br>");
   
   foreach($endereco as $dados_endereco)
   {
     echo $dados_endereco. "<br>";
   }
   
   echo "<br>";
   
   //Exemplo 2 de um array linear
   $signos[] = "aries";
   $signos[] = "touro";
   $signos[] = 'gemeos';
   $signos[] = 'Libra';
   $signos[] = 'Virgem';
   $signos[] = 'Capricornio';
   $signos[] = 'Peixes';
   $signos[] = 'Aquario';
   $signos[] = 'Leao';
   $signos[] = 'Escorpiao';
   $signos[] = 'Sargitario';

   
   foreach($signos as $signo)
   {
     echo $signo. "<br>";
   }

 ?>
