<?php

      //Exercitando o uso do Switch.

$crypto_moeda = 'Shibainu';

switch ($crypto_moeda) {
  case "Xrp":
    echo "Se mostrou resistente as quedas de mercado e é um bom investimento.";
    break;
  case "Bitcoin":
    echo "E um bom investimento.O bitcoin é o top 1 das cryptos.";
    break;
  case "Shibainu":
    echo "E considerada uma memecoin...Cuidade ao investir nesse tipo de crypto";
    break;
  default:
    echo "Voce precisa escolher entre:Xrp, Bitcoin E Shibainu. ";
}
?>
