<?php

     /*Essa função recebe 3 argumentos e retorna o volume de agua
       de uma piscina retangular.
     
     */
   
    function piscina_retangular($largura, $profundidade, $comprimento){
    
    $vol_agua = $largura * $comprimento * $profundidade;
    echo 'A quantidade do volume em litros é : ' . $vol_agua * 1000 . ' mil litros';
    }
    
    piscina_retangular(5.0, 1.20, 15.0);
    piscina_retangular(7.0, 3.5, 20.0);
?>
