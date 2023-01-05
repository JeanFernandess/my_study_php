<?php 
   
   /*A função strpos() retorna a quantidade de caracteres até antes do 
   primeiro caracter do texto procurado.
     Se for acrescentado o terceiro argumento, um numero inteiro, ele vai
   iniciar a busca apartir do numero de caracteres especificado nesse terceiro
   argumento.Se for um numero negativo, a busca pelo texto descrito no segundo
   argumento será feita de forma reversiva.
    */
    
   if(strpos("Ser metodico, curioso e persistente e o segredo para ter sucesso", "metodico", -60))
   {
     echo 'Esta palavra esta dentro da string $pesquise';
   }
   else
   {
     echo 'Palavra não encontrada!';
   }


?> 
