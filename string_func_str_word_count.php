<?php
   $string ='Tudo na vida se resume a comer e dormir.';
   
   //Se o numero de palavras for igual a 9, o bloco do if será executado.
   if(str_word_count($string) == 9)
   {
     echo 'A string possui ' . str_word_count($string) . ' palavras.<br>';
     echo " Essa é a string -> $string ";
   }
   
     
?> 
