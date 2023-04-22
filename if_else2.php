<?php
     
     //Praticas e estudos com if else

    $semana_trabalho = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado', 'Domingo'];
    
    foreach($semana_trabalho as $folga){
      
      if($folga == 'Sabado' || $folga == 'Domingo'){
        echo 'O dia de ' .$folga. ' será a minha folga'. "<br>";
      }else{
      echo 'Hoje ' .$folga. ' e dia de trabalho!'. "<br>";
      }
      
    }
    
     

 ?>
