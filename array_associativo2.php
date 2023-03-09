  
 <?php  
      
      
      // Exemplo se array associativo

   $jean_dados['Nome'] = 'Jean Fernandes Batista';
   $jean_dados['Idade'] = '28';
   $jean_dados['Profissão'] = 'Desenvolvedor back-end';
   $jean_dados['Formação'] = 'Analise de Sistemas';
   $jean_dados['Altura'] = '1.82';
   
   foreach($jean_dados as $key => $dados){
     
     echo $key. ' --> ' .$dados. "<br>";
   }
    
  

?>
