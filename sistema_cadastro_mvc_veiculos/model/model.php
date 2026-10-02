<?php

class Veiculo{
    private $placa;
    private $marca;
    private $modelo;
    private $cor;
    private $ano;
    private $porte;
    private $tipocarga;
    private $chassis;

    public function __construct($placa,$marca,$modelo,$cor,$ano,$porte,$tipocarga,$chassis){
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
        $this->porte = $porte;
        $this->tipocarga = $tipocarga;
        $this->chassis = $chassis;
    }

    public function salvar(){
        $conn = new mysqli("localhost", "root", "", "BD_VEICULOS");

        if ($conn->connect_error) {
            return "Não foi possível conectar ao banco de dados.";
        }

        $insert = $conn->prepare("INSERT INTO veiculos 
        (PLACA, MARCA, MODELO, COR, ANO, PORTE, TIPOCARGA, CHASSIS)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        $insert->bind_param("ssssisss",
            $this->placa,
            $this->marca,
            $this->modelo,
            $this->cor,
            $this->ano,
            $this->porte,
            $this->tipocarga,
            $this->chassis
        );

        try {
            $insert->execute();

            $insert->close();
            $conn->close();

            return "sucesso";

        } catch (mysqli_sql_exception $erro) {

            $insert->close();
            $conn->close();

            if ($erro->getCode() == 1062) {
                return "Veículo não cadastrado. A placa ou o chassis informado já está cadastrado.";
            }

            return "Não foi possível cadastrar o veículo.";
        }
    }
}
?>