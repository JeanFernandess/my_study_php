<?php

//Praticando a função rsort();

$meus_amigos = array('1' => 'João', '2' => 'Maria', '3' => 'Tiago', '4' => ' Karina', '5' => 'Tulio');

//Antes de chamar a função rsort().
print_r($meus_amigos);
echo "<br>";

//Depois de chamar a função rsort();
rsort($meus_amigos);
print_r($meus_amigos);




?>
