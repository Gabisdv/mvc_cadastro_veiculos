    <?php

    require_once "../model/model_relatorio.php";

    if(
        isset($_POST["id"]) &&
        isset($_POST["placa"]) &&
        isset($_POST["marca"]) &&
        isset($_POST["modelo"]) &&
        isset($_POST["cor"]) &&
        isset($_POST["ano"]) &&
        isset($_POST["porte"]) &&
        isset($_POST["tipocarga"]) &&
        isset($_POST["chassis"])
    ) {

        $veiculo = new Veiculo();

        $veiculo->editaVeiculo(
            $_POST["id"],
            strtoupper($_POST["placa"]),
            $_POST["marca"],
            $_POST["modelo"],
            $_POST["cor"],
            $_POST["ano"],
            $_POST["porte"],
            $_POST["tipocarga"],
            $_POST["chassis"]
        );

        header("Location:../view/view_relatorio_veiculos.php");
        exit;
    }
    ?>