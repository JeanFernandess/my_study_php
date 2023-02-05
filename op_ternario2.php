<?php 
      //Se a variavel $minha_idade for maior que 17, voce deve se alistar.

    $minha_idade = 17;
    
    $alistamento = ($minha_idade > 17)? 'Voce deve se alistar, procure uma junta militar' : 'Voçe não tem idade suficiente para alistamento';
    
    echo $alistamento;
?> 
