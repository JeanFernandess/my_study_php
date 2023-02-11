<?php

    /*
      Essa função recebe uma variavel $meu_email
      e retorna uma mensagem se o email passado
      dentro do argumento é valido. 
      */
   
   $meu_email = "Programador@jmail.com";
   
   function validar_email($meu_email){
     
       if(filter_var($meu_email, FILTER_VALIDATE_EMAIL)){
         echo 'Email é valido!';
         
           }else{
               echo 'Email inválido!';
          }   
     
     }
   
    validar_email($meu_email);
   
   
       
  
 ?>
