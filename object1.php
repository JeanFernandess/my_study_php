<?php 

class endereco
{
     function print_objt()
     {
       echo 'Eu sou programador <br>';
     }
     
     function dev_motivacao()
     {
       echo <<<'Text'
            Se sua vida está uma merda?<br>
            Não perca tempo e estude,<br>
            se torne um desenvolvedor de respeito!<br>
Text;
     }
}

//Usando a instrução new se faz a instancia de uma classe(endereco) e um objeto($Jean).
$Jean = new endereco;
$Jean ->print_objt();
$Jean ->dev_motivacao();

//Conversão de um array para um objeto instaciado da classe(stdClass)
$x = (object) array('Rua' => 'Rua dos prazeres',
      'Numero' => '1234',
      'Cidade' => 'Rio de Janeiro'); 
      
var_dump($x);


?>  
