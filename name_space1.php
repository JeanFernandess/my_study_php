<?php
     /* Namespa e usado pra encapsular funções,
        Clases e constantes.
        
        Abaixo esta um exemplo bem simples.
       */

namespace exemplo1;

$a = 50;
$b = 'Jotinha';

function meuNome($y){
  echo 'Meu nome é: ' . $y;
}

function contador($b){
  if(is_int($b)){
    for($i = 0;$i <= $b;$i++){
      echo 'Numero: ' . $i . "<br>";
    }
  }else{
    echo 'Digite um numero inteiro!';
  }
}

\exemplo1\contador($a);
echo "<br>";
\exemplo1\meuNome($b);
     
     
     

 ?>
