<?php

     //Exemplo simples de um array linear e o foreach fazendo interações com esse array junto com if, elseif, else.

     $felinos = array("Tigre", "Leão", "Onça", "Gato do mato", "Leopardo", "Puma", "Jaguar", "Jaguátirica");
     
     foreach($felinos as $felino){
         if($felino == "Leão"){
             echo " O felino $felino é o MAIS FORTE e PERIGOSO<br>";
         }elseif($felino == "Gato do mato"){       
             echo " O felino $felino é o MENOS PERIGOSO!<br>";
         }else{
             echo " O felino $felino não deixa de ser PERIGOSO!CUIDADO!<br>";
         }
     }
?> 
