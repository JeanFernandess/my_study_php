<?php

    // Essa função mostra o volume de agua numa piscina oval.
    
    function piscina_oval($comprimento, $largura, $profundidade){
    
    $vol_piscina = $comprimento * $largura * $profundidade;
    echo 'O volume da piscina em litros e :' . $vol_piscina * 1000 * 0.8;
    }
    
    piscina_oval(10, 3, 2);
    piscina_oval(12.0, 5.0, 3.0);
?>  
