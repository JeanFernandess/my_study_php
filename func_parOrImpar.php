<?php

      /* Essa função imparOuPar recebe dois argumentos,
         sendo que a função retorna a sua vitoria ou
         derrota.
      */

     function imparOuPar($numero,$impOrPar){
       
       $jogador_num = rand(0, 52);
       $jogador_impOrPar = (rand(0, 52) % 2 == 0) ? 'Par' : 'Impar';
       $num_impOrPar = $numero + $jogador_num;
       $resul = ($num_impOrPar % 2 == 0) ? 'Par' : 'Impar';
       
       
       if($resul == $impOrPar){
         
         echo 'Voce ganhou! <br>';
         echo 'Sua opção foi: '.$impOrPar. "<br>";
         echo 'Seu numero escolhido : '.$numero;
         echo "<br>";
         echo 'Opção do programa: '.$jogador_impOrPar. "<br>";
         echo 'Numero escolhido pelo programa :'.$jogador_num. "<br>";
        
         
       }elseif($resul == $jogador_impOrPar){
         
         echo 'O programa venceu!'."<br>";
         echo 'Opção do programa: '.$jogador_impOrPar. "<br>";
         echo 'Numero escolhido pelo programa :'.$jogador_num;
         echo "<br>";
         echo 'Sua opção foi: '.$impOrPar. "<br>";
         echo 'Seu numero escolhido : '.$numero. "<br>";
         
       }else{
         
         echo "TENTE DE NOVO!! <br>";
         
       }
       
     }
     
     imparOuPar(6,'Par');
     

 ?>
