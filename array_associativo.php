 <?php
 
   /* Array associativo se dá quando temos,
      em cada posição, uma Chave => Valor.  
   */
     
     $joao['Nome'] = 'Joao Pilantra';
     $joao['Idade'] = '33';
     $joao['Cor'] = 'Negra';
     $joao['Naturalidade'] = 'Casa da mãe Joana';
     $joao['Escolaridade'] = 'Terceiro grau';
     
     foreach($joao as $dados)
     {
       echo "$dados <br>";
     }
 ?>
