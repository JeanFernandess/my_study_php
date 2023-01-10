<?php
   /*
     A função array_keys() recebe dois argumentos
     e retorna apenas as chaves de cada valo.
     
     Se for especificado o segundo argumento
     sera retornado indice relacionado a esse parametro

     array_keys(Array, Valor a ser procurado)
   */
       
     
     $frutas = array('Fruta_1'=> 'Mamao','Fruta_2' => 'Melancia','Fruta_3' => 'Melao', 'Fruta_4' => 'Banana', 'Fruta_5' => 'Laranja', 'Fruta_6' => 'Morango');
     
     
     $indices = array_keys($frutas);
     
     var_dump($indices);

 ?>
