<?php

    /* (\", \\, \$) O que estiver entre aspas duplas
       será interpretado pelo php.
      */

    $empresa = "\\Light \\";
    echo "$empresa <br>";
    
    
    $estado_suldeste = "\" Rio de Janeiro \"";
    echo "$estado_suldeste <br>";
    
    
    $moeda_brasileira = "\$ Real \$ ";
    echo "$moeda_brasileira <br>";
    

//O que esta, entre aspas duplas, será interpretado pelo Php
     function printString($string){

      if(is_string($string)){

        echo "Conteudo do parametro da funcao printString: $string";

      }else{

        echo 'ERRO!!!Argumento invalido!';

      }

    } 
    
    printString($estado_suldeste);
       
    
    
    
   

 ?>
