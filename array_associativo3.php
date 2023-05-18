<?php

    //Entendimento dos arrays associativos.

     $carteira_bitcoin = array('CarteiraBitcoin' => 'Carteira01',
                               'CarteiraSaldo' => '0.900000',
                               'CarteiraSenha' => 'hhjsjsjsjsggfsjjsj',
                               'CarteiraEndereco' => 'xhdgsjdugfsjjsgjey');
                               
                               
    $carteira_etherium = array('CarteiraEtherium' => 'CarteiraEtherium02',
                               'CarteiraSaldo' => '0.9865466',
                               'CarteiraSenha' => '46gsh56gdvjs567',
                               'CarteiraEndereco' => 'dhduevdgshsbv');
                               
    $carteira_xrp = array('CarteiraXrp' => 'CarteiraXrp03',
                          'CarteiraSaldo' => '20.000',
                          'CarteiraSenha' => '52sjdb5gj57gkhf67bf',
                          'CarteiraEndereco' => 'sgshsvdgshsjsgsj');
                          
    echo 'O nome da carteira e: ' . $carteira_bitcoin['CarteiraBitcoin']. "<br>";
    echo 'O saldo da carteira é: '. $carteira_bitcoin['CarteiraSaldo'];
 ?>
