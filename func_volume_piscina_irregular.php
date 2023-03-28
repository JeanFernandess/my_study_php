<?php

    // Essa função mostra o volume de agua numa piscina irregular.
    
    function piscina_irregular($comprimento1, $comprimento2, $largura1, $largura2, $profundidade1, $profundidade2){
    
    $comprimento_media = ($comprimento1 + $comprimento2)/2;
    $largura_media = ($largura1 + $largura2)/2;
    $profundidade_media = ($profundidade1 + $profundidade)/2;
    
    $piscina_vol = $comprimento_media * $largura_media * $profundidade_media;
    
    echo 'O volume da piscina irregular em litros é: ' . $piscina_vol * 1000;
    
    }
    
    piscina_irregular(10.0, 13.0, 4.0, 3.5, 1.2, 2.0);
    echo "<br>";
    piscina_irregular(25.0, 10.0, 5.0, 3.0, 3.0, 0.45);
?>
