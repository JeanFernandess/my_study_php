<?php
   
       
   $empregado = ['Jones', 'Julia', 'Maria', 'João'];
   
   foreach($empregado as $colaborador){
        if($colaborador == 'Julia'){
       
          echo "A fucionaria $colaborador é REFERÊNCIA na sua função <br />";
       
        }else if($colaborador == 'João'){
       
          echo "O funcionario $colaborador é o nosso ESTAGIARIO <br />";
        }
     
    echo "$colaborador é meu companheiro de equipe!<br /> ";
  }

 ?>
