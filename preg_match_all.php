<?php

       /* A função preg_match_all() informa a quantidade
          de correspondencia encontrada em uma string.
       */
       
$string = "O estudo de programação e importante para a fixação do conhecimento. Eu tenho muita admiração por pessoas que conseguem passar horas estudando a função em que se deseja trabalhar.";

$padrao = "/ão/i";

echo preg_match_all($padrao, $string);

?>
