<?php  
 
    // Pratica de array, estrutura de repeticao e decisão.
     
      
      
 
    $cryptos = array('Bitcoin', 'Etherium', 'Xrp', 'Xlm', 'Shibainu', 'Hbar');
    
    foreach($cryptos as $crypto){
        if($crypto == 'Bitcoin'){
            echo "A crypto $crypto se provou a melhor ao longo do tempo. <br>";
      
            }elseif($crypto == 'Shibainu'){
                echo "A crypto $crypto e considerada uma moeda meme.<br>";
      
                }else{
                    echo "A crypto $crypto e aceitavel.<br>";
      
    }
    
 }

    
  

?>  

      
