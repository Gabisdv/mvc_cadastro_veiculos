<?php

require_once "../model/model.php";

if(isset($_POST["placa"]) && isset($_POST["marca"]) && isset($_POST["modelo"]) && isset($_POST["cor"]) && isset($_POST["ano"]) && isset($_POST["porte"]) && isset($_POST["tipocarga"]) && isset($_POST["chassis"])){

    $placa = strtoupper(trim($_POST['placa']));
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $cor = $_POST["cor"];
    $ano = $_POST["ano"];
    $porte = $_POST["porte"];
    $tipocarga = $_POST["tipocarga"];
    $chassis = $_POST["chassis"];

    $veiculo = new Veiculo($placa,$marca,$modelo,$cor,$ano,$porte,$tipocarga,$chassis);

    $resultado = $veiculo->salvar();

    if($resultado == "sucesso"){
        header("Location:../view/view_relatorio_veiculos.php");
        exit;
    } else {
        echo $resultado;
    }

} else {
    echo "Erro: todos os campos são obrigatórios.";
}

?>