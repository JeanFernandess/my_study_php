<?php

      /* Essa função imparOuPar recebe dois argumentos,
         sendo que a função retorna a sua vitoria ou
         derrota.
      */

     function imparOuPar($numero,$impOrPar){
       
       //Número do oponente
       $jogador_num = rand(0, 52);
       
       //Opção do oponente: ímpar ou par?
       $jogador_impOrPar = (rand(0, 52) % 2 == 0) ? 'Par' : 'Impar';

       //Soma da escolha do oponente mais o número do jogador.
       $num_impOrPar = $numero + $jogador_num;

       //Quem ganhou?Jogador ou Oponente?
       $resul = ($num_impOrPar % 2 == 0) ? 'Par' : 'Impar';
       
       //Se o jogador ganhou, se não, vitória do oponente.
       if($resul === $impOrPar){
         
         echo 'Voce ganhou! <br>';
         echo 'Sua opção foi: '.$impOrPar. "<br>";
         echo 'Seu numero escolhido : '.$numero;
         echo "<br>";
         echo 'Opção do programa: '.$jogador_impOrPar. "<br>";
         echo 'Numero escolhido pelo programa :'.$jogador_num. "<br>";
        
         
       }else{
         
         echo 'O programa venceu!'."<br>";
         echo 'Opção do programa: '.$jogador_impOrPar. "<br>";
         echo 'Numero escolhido pelo programa :'.$jogador_num;
         echo "<br>";
         echo 'Sua opção foi: '.$impOrPar. "<br>";
         echo 'Seu numero escolhido : '.$numero. "<br>";
         
       }
       
     }
     
     //Chamada da função ímpar ou par.E necessário 2 argumentos.
     imparOuPar(6,'Par');
     imparOuPar(5, 'Impar');
     

 ?>
