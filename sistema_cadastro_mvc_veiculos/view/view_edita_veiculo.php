<?php

require_once '../controller/controller_relatorio.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Editar Veículo</title>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Edição de Veículos</h1>
    <br/>
    <form action="../controller/controller_editar.php" method="POST">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>PLACA</th>
                <th>MARCA</th>
                <th>MODELO</th>
                <th>COR</th>
                <th>ANO</th>
                <th>PORTE</th>
                <th>TIPO DE CARGA</th>
                <th>CHASSIS</th>
                <th>Editar</th>
            </tr>
            <?php
                if(isset($veiculos) && count($veiculos)){
                    foreach($veiculos as $vei){
            ?>
                <tr>
                    <td>
                        <input type="text"
                               name="id"
                               id="id"
                               readonly
                               value="<?php echo $vei['ID']; ?>">
                    </td>
                    <td>
                        <input type="text"
                               name="placa"
                               id="placa"
                               value="<?php echo $vei['PLACA']; ?>">
                    </td>
                    <td>
                        <input type="text"
                               name="marca"
                               id="marca"
                               value="<?php echo $vei['MARCA']; ?>">
                    </td>
                    <td>
                        <input type="text"
                               name="modelo"
                               id="modelo"
                               value="<?php echo $vei['MODELO']; ?>">
                    </td>
                    <td>
                        <input type="text"
                               name="cor"
                               id="cor"
                               value="<?php echo $vei['COR']; ?>">
                    </td>
                    <td>
                        <input type="number"
                               name="ano"
                               id="ano"
                               value="<?php echo $vei['ANO']; ?>">
                    </td>
                    <td>
                        <input type="text"
                               name="porte"
                               id="porte"
                               value="<?php echo $vei['PORTE']; ?>">
                    </td>
                    <td>
                        <input type="text"
                               name="tipocarga"
                               id="tipocarga"
                               value="<?php echo $vei['TIPOCARGA']; ?>">
                    </td>
                    <td>
                        <input type="text"
                               name="chassis"
                               id="chassis"
                               value="<?php echo $vei['CHASSIS']; ?>">
                    </td>
                    <td>
                        <input type="submit" value="Editar">
                    </td>
                </tr>
            <?php
                    }
                }
            ?>
        </table>
    </form>
</body>
</html>