<?php
require_once 'exer1.php';
 
$vinho = new Vinho("Chardonnay 149", "Branco", 80.00, 1990);
 
$detalheVinho = $vinho-> exibirFuncao();
$ofertaVinho = $vinho-> exibirPreco() ? "Oferta!" : "Preço normal!";
?>