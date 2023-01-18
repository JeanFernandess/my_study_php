<?php
       /* A função preg_replace() basicamente substitui
          uma uma correspondencia estabelecida no padrao
          por outra outra string.
       */
$string = "Eu sou programador nivel Sênior, estudei muito para estar nesse nivel de conhecimento!";
$padrao = "/Sênior/i";

echo preg_replace($padrao, "Junior ", $string);


?>
