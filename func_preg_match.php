<?php
     
     /* A função preg_match() informará  se a string 
        corresponde a um padrão.
     */

$string = "Jean é um cara bastante estudioso e dedicado a seus objetivos";
$padrao = "/bastante/i";
echo preg_match($padrao, $string);

     /* Será feita uma busca pelo padrão (bastante)
        dentro da string se true retornará 1,
        se não 0.
     */

?>
