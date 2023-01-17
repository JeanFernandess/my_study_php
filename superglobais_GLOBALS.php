<?php 

     /* A variavel superglobal $GLOBALS pode acessar qualquer variavel
        global dentro e fora da função ou metodo.
        As variaveis globais são armazenadas em um array $GLOBALS[] e
        cada indice contem o nome da variavel
     */
     
     
$numero1 = 30;
$numero2 = 20;
$numero3 = 40;
$numero4 = 10;

function addition() {
  $GLOBALS['numero5'] = $GLOBALS['numero1'] + $GLOBALS['numero2'] + $GLOBALS['numero3'] + $GLOBALS['numero4'];
  
}

addition();
echo $numero5;

?>
