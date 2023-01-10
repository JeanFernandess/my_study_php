<?php
   /*
     A função array_merge() recebe dois,ou
      mais arrays, e faz a junção de ambos.
     
     array_merge(Array1, Array2, Array + N)
   */
       
     $flores = array('Rosa', 'Margarida', 'Orquidea', 'Tulipa');
     $frutas = array('Melao', 'Banana', 'Laranja', 'Morango');
     
     $resultado = array_merge($flores, $frutas);
     
     var_dump($resultado);

 ?>
