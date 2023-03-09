<?php
   /*
     A função sort() recebe um array
     e ordena os valores desse array
     sem manter a relação de indices.
     
     
     sort(Array)
     
   */
       
     
     
    $estados = array('Estado_0' => 'Paraiba',
                     'Estado_1' => 'Bahia',
                     'Estado_2' => 'Pernambuco',
                     'Estado_3' => 'Ceará',
                     'Estado_4' => 'Maranhão',
                     'Estado_5' => 'Alagoas',
                     'Estado_6' => 'Rio de Janeiro',
                     'Estado_7  => 'Amazonas',
                     'Estado_8  => 'Minas Gerais');   

     
    
     
    //Os estados serão ordenados de forma alfabetica. 
    sort($estados);
    print_r($estados);
    
     
     

 ?>
