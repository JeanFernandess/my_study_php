<?php


    /*Uma string é uma sequençia de caracteres entre aspas, seja simples ou duplas.
    Diferente de uma string com aspas duplas, tudo o que está entre aspas simples 
    não é interpretado pelo php(\\, \n, ou \$).
    */
    
    // Alguns exemplos de string com aspas simples.
    
    $peixe = 'Garoupa';
    echo "$peixe <br>";
    
    $mamifero = 'Vaca';
    echo "$mamifero<br>";
    
    $cpf = '903.833.876-99';
    echo "$cpf<br>";
    
    $data_nascimento = '11/02/98';
    echo "$data_nascimento <br>";
    
    //Função para teste
    function mostrarString()
    {
     $string_exemplo = 'Meus estudos com php';
     echo $string_exemplo;
    }
    
    //A função mostrarString() não será executada
    echo 'Resultado da função mostrarString: .mostrarString()\n';
    
    
    echo "<br>";
    
    
    //Dessa forma o que está entre aspas duplas(\\) é interpretado.
      echo "Será imprimido apenas uma barra: \\";
    

?> 
