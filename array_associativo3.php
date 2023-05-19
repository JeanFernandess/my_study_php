<?php

    //Entendimento dos arrays associativos.

     $carteira_bitcoin = array('CarteiraBitcoin01' => 'Carteira01',
                               'CarteiraSaldo01' => '0.900000',
                               'CarteiraSenha01' => 'hhjsjsjsjsggfsjjsj',
                               'CarteiraEndereco01' => 'xhdgsjdugfsjjsgjey');
                               
                               
    $carteira_etherium = array('CarteiraEtherium02' => 'CarteiraEtherium02',
                               'CarteiraSaldo02' => '0.9865466',
                               'CarteiraSenha02' => '46gsh56gdvjs567',
                               'CarteiraEndereco02' => 'dhduevdgshsbv');
                               
    $carteira_xrp = array('CarteiraXrp03' => 'CarteiraXrp03',
                          'CarteiraSaldo03' => '20.000',
                          'CarteiraSenha03' => '52sjdb5gj57gkhf67bf',
                          'CarteiraEndereco03' => 'sgshsvdgshsjsgsj');
                          
    echo 'O nome da carteira 01 e: ' . $carteira_bitcoin['CarteiraBitcoin01']. "<br>";
    echo 'O saldo da carteira 01 é: '. $carteira_bitcoin['CarteiraSaldo01']. "<br>";
    echo "<br>";
    echo 'O nome da carteira 02 e:' . $carteira_etherium['CarteiraEtherium02']. "<br>";
    echo 'O saldo da carteira 02 e:' . $carteira_etherium['CarteiraSaldo02'] . "<br>";
 ?>
