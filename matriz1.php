<?php

    /*O array multidimensional se dá quando temos,
     como argumento, outro array.
     */
      
  
    $funcionarios = array('Tiago' => array('nome' => 'Tiago Coutinho',
                                           'setor' => 'tecnologia',
                                           'cargo' => 'desenvolvedor',
                                           'experiencia' => 'junior',
                                           'stack' => 'back-end'),
                                           
                          'Larissa' => array('nome' => 'Larissa Souza',
                                             'setor' => 'tecnologia',
                                             'cargo' => 'desenvolvedora',
                                             'experiencia' => 'pleno',
                                             'stack' => 'front-end'),
                                             
                           'Felipe' => array('nome' => 'Felipe Barros',
                                             'setor' => 'tecnologia',
                                             'cargo' => 'desenvolvedor',
                                             'experiencia' => 'senior',
                                             'stack' => 'full-stack')
                         );
                         
    //Dessa maneira mostramos os dados do array multidimensional(matriz).
    echo $funcionarios['Tiago']['nome']."<br>";                   
    echo $funcionarios['Tiago']['experiencia']."<br>";
    echo $funcionarios['Tiago']['stack'] ."<br>";
    
    echo "<br>";
    
    echo $funcionarios['Larissa']['nome']."<br>";
    echo $funcionarios['Larissa']['experiencia']."<br>";
    echo $funcionarios['Larissa']['stack'] ."<br>";
    
    echo "<br>";
    
    echo $funcionarios['Felipe']['nome']."<br>";
    echo $funcionarios['Felipe']['experiencia']."<br>";
    echo $funcionarios['Felipe']['stack'];
    
    
   

 ?>
