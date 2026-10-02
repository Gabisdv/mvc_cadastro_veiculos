<?php
require_once "../model/model_relatorio.php";
    if(isset($_GET["id"])){
        $veiculo_exclui = new Veiculo();
        $veiculo_exclui->excluirVeiculo($_GET["id"]);
        header('Location: ../view/view_relatorio_veiculos.php');
        exit;
    }
    else{
        echo "Erro!";
        die();
    }
?>