<?php

require_once "../controller/controller_relatorio.php";

?>

<!DOCTYPE html>

<html lang="pt-BR">

    <head>

        <meta charset="UTF-8">

        <title>Relatório de Veículos</title>

    </head>

    <body>

        <h1>Relatório de Veículos</h1>

        <form action="" method="POST">

            <input type="text"
                   id="pesquisa"
                   name="pesquisa"
                   placeholder="Placa ou Modelo...">

            <input type="submit" value="Pesquisar">

        </form>

        <br/>

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
                <th>EDITAR</th>
                <th>EXCLUIR</th>

            </tr>

            <?php

            if(isset($veiculos) && count($veiculos) > 0){

                foreach($veiculos as $veiculo){

            ?>

            <tr>

                <td>
                    <?php echo $veiculo["ID"]; ?>
                </td>

                <td>
                    <?php echo $veiculo["PLACA"]; ?>
                </td>

                <td>
                    <?php echo $veiculo["MARCA"]; ?>
                </td>

                <td>
                    <?php echo $veiculo["MODELO"]; ?>
                </td>

                <td>
                    <?php echo $veiculo["COR"]; ?>
                </td>

                <td>
                    <?php echo $veiculo["ANO"]; ?>
                </td>

                <td>
                    <?php echo $veiculo["PORTE"]; ?>
                </td>

                <td>
                    <?php echo $veiculo["TIPOCARGA"]; ?>
                </td>

                <td>
                    <?php echo $veiculo["CHASSIS"]; ?>
                </td>

                <td>
                    <a href="view_edita_veiculo.php?id=<?php echo $veiculo["ID"]; ?>">
                        Editar
                    </a>
                </td>

                <td>
                    <a href="../controller/controller_excluir.php?id=<?php echo $veiculo["ID"]; ?>">
                        Excluir
                    </a>
                </td>

            </tr>

            <?php

                }

            }

            ?>

        </table>

        <br/>

        <a href="index.html">
            <button>Cadastrar Veículo</button>
        </a>

    </body>

</html>