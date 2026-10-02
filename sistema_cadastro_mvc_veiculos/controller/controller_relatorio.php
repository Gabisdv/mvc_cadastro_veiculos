<?php

require_once "../model/model_relatorio.php";

if(isset($_POST["pesquisa"])){
    $veiculos_relatorio = new Veiculo();
    $veiculos = $veiculos_relatorio->getVeiculo($_POST["pesquisa"]); 
}
else if(isset($_GET["id"])){
    $veiculos = new Veiculo();
    $veiculos = $veiculos->getVeiculoId($_GET["id"]);
}
else{
    $veiculos_relatorio = new Veiculo();
    $veiculos = $veiculos_relatorio->getVeiculos();
}

?>