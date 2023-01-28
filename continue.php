<?php  
     
     /*
       A instrução CONTINUE e bem parecida com BREAK, porem no caso 
       do continue, essa instrução ignora o que for especificado numa condição
       e da continuidade no loop.
     */
     
for ($x = 0; $x < 100; $x += 10) {
  if ($x == 50) {
    continue;
  }
  echo "The number is: $x <br>";
}


?>
