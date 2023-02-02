<?php
     /* A função minhaIdade() recebe dois argumentos e retorna 
        a sua idade atual.
      
     */
     
     function minhaIdade($anoAtual = 0, $anoNascimento = 0): int{
     
     $idadeAtual = $anoAtual - $anoNascimento;
     return $idadeAtual;
    
     }
     
     echo(minhaIdade());
?>
