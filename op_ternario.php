<?php   
     
     /* O operador ternario impõe uma condição, se verdadeiro
        a segundo opção e executado, se falso recorre-se a 
        terceira condição.
       
     */
     
     $nome = 1234;
     $meu_nome =is_string($nome)? "Seu nome é $nome" : 'O argumento não é uma string';
     
     echo $meu_nome;

?> 
