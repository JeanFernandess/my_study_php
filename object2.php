<?php

     

     //Entendimento e pratica de objetos no php.
     //O objeto $backend_php e estaciado na classe padrao stdClass.

$backend_php = (object) array('Framework' => 'Laravel',

                              'Linguagem' => 'Php',

                              'Banco de dados' => 'Mysql',

                              'Servidor' => 'Apache',
                              
                              'Banco nao relacional' => 'MariaDb');

                              

 var_dump($backend_php);

   

 ?>
