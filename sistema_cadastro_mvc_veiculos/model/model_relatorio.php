<?php

include_once "../controller/conecta_banco.php";

class Veiculo{

    public function getVeiculos(){
        $conn = Database::getConnection();
        $result = $conn->query("SELECT * FROM VEICULOS ORDER BY MODELO");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getVeiculo($pesquisa){
        $conn = Database::getConnection();

        $pesquisa = "%" . $pesquisa . "%";

        $stmt = $conn->prepare("SELECT * FROM VEICULOS WHERE MODELO LIKE ? OR PLACA LIKE ?");
        $stmt->bind_param("ss", $pesquisa, $pesquisa);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getVeiculoId($id){
        $conn = Database::getConnection();

        $stmt = $conn->prepare("SELECT * FROM VEICULOS WHERE ID = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function excluirVeiculo($id){
        $conn = Database::getConnection();

        $stmt = $conn->prepare("DELETE FROM VEICULOS WHERE ID = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $stmt->close();
        $conn->close();

        return true;
    }

    public function editaVeiculo($id,$placa,$marca,$modelo,$cor,$ano,$porte,$tipocarga,$chassis){
        $conn = Database::getConnection();

        $stmt = $conn->prepare("UPDATE VEICULOS SET PLACA = ?, MARCA = ?, MODELO = ?, COR = ?, ANO = ?, PORTE = ?, TIPOCARGA = ?, CHASSIS = ? WHERE ID = ?");

        $stmt->bind_param(
            "ssssisssi",
            $placa,
            $marca,
            $modelo,
            $cor,
            $ano,
            $porte,
            $tipocarga,
            $chassis,
            $id
        );

        $resultado = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $resultado;
    }

}

?>