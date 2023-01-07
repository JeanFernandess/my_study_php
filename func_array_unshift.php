<?php
   
   $marca_carros = array('Bmw', 'Ferrari','Ford', 'Chevrolet');
   
   //Essa função adiciona um item no inicio do array
   array_unshift($marca_carros, 'Fiat');
   array_unshift($marca_carros, 'Hyundai');
   
   var_dump($marca_carros);

 ?>
