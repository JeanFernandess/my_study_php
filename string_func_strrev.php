<?php
   $carro_marca = array('Mitsubishi', 'Volkswagen', 'Peugeot', 'Troller', 'Fiat');
   
   for($i = 0; $i < 3; $i++)
   {
   
     foreach($carro_marca as $marca)
     {
       //A função strrev() reverte o conteudo das posições no array $carro_marca.
       echo "Reverso =>" . strrev($marca) . "<br>";
       
     }
    echo "<br>";
    
   }
