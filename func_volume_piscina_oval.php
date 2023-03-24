<?php

    // Essa função mostra o volume de agua numa piscina oval.
    
    function piscina_oval($comprimento, $largura, $profundidade){
    
    $vol_piscina = $comprimento * $largura * $profundidade;
    echo 'O volume em litros e :' . $vol_piscina * 1000 * 0.8;
    }
    
    piscina_oval(10, 3, 2);
?>  
