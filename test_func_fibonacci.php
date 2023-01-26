<?php
      
      /* A função fibonacci() recebe um argumento,
         se o parametro for 0 ou 1 não retorna os 
         mesmos.
         Se for diferente a quantidade de posições
         do array sera igual ao numero do argumento.
         
       */
         
         
      function fibonacci($x){
        
      $num_1 = 0;
      $num_2 = 1;
      $saida_fibo = 1;
      $vetor_fibo[] = 0;
      
      
      if($x == 0 || $x == 1){
         
         return $x;
         
      }
       
      for($i = 0; $i <= $x; $i++){    
         
      $vetor_fibbo[] = $saida_fibo;
      $saida_fibo = $num_1 + $num_2;
      $num_1 = $num_2;
      $num_2 = $saida_fibo;
         
      }
         
      var_dump($vetor_fibbo);
  }
     
  echo(fibonacci(0). "<br>");
  echo(fibonacci(1). "<br>");
  fibonacci(10);
   
 

 ?>
