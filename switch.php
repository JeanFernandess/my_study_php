<?php
     
     // Se verdadeiro pode ser executado um dos blocos de codigo.
     // Se falso será executado um bloco default de código

$profissao = "Programador Php1";

switch ($profissao) {
  case "Programador Java":
    echo "Minha profissão é programador Java!";
    break;
  case "Programador Javascript":
    echo "Minha profissao é programador Javascript!";
    break;
  case "Programador Php":
    echo "Minha profissão é programador Php!";
    break;
  default:
    echo "Sua profissão não foi identificada!";
}
?>
