<?php
     
     /*As referençias no php significa que pode-se acessar ou modificar 
       um conteudo de alguma variavel usando nomes diferentes para essa
       variavel.
     */
     
     $email = 'programador@gmail.com';
     $senha = '123@&*%&';
     
     $meu_email =& $email;
     echo $meu_email. "<br>";
     
     $minha_senha =& $senha;
     echo $minha_senha. "<br>";
     
     $meu_email = 'aspirantedev@gmail.com';
     echo $meu_email. "<br>";
     
     $minha_senha = '321*%$#';
     echo $minha_senha;
     
     
?>
