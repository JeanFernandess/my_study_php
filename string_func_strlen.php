<?php
  
    $senha = 12;
    $email = 'Desenvolvedor@gmail.com';
    
    /*A função strlen retorna o comprimento da string,
      no caso, strlen($email) retorna 23
     */
      
    if(strlen($email) == 23 && $senha == 12)
    {
      echo 'Acesso autorizado!';
    }
    else
    {
      echo 'Digite seus dados corretamente!';
    }
    
    
    
   
?> 
