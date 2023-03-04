<?php
   
   $stack = array('Front-end', 'Back-end','Full-stack', 'Dev-ops');
   
   //Essa função remove um item no inicio do array
   array_shift($stack);
   array_shift($stack);
   array_shift($stack);
   
   var_dump($stack);

 ?>
