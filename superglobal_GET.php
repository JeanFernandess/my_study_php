<?php

    /* A variavel superglobal $GET coleta dados
       passados pela URL e dos formularios HTML
       usando o method="get".
       
      
      Exemplo: http//:JeanProgramador.com?nome=Jean&sobrenome=Fernandes
     */
       
      $nome = $_GET['nome'];
      $sobrenome = $_GET['sobrenome'];
    
      echo "Meu nome é $nome e meu sobrenome é $sobrenone";
    
 ?>
