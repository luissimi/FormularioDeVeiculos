<?php

    if(isset($_POST['submit']))
    {
        // print_r('Veiculos: ' . $_POST['veiculo']);
        // print_r('<br>');
        // print_r('Placa: ' . $_POST['placa']);
        // print_r('<br>');
        // print_r('Cor: ' . $_POST['cor']);
        // print_r('<br>');
        // print_r('Yes: ' . $_POST['situação']);
        // print_r('<br>');
        // print_r('No: ' . $_POST['situação']);
        // print_r('<br>');
        // print_r('Data: ' . $_POST['data']);
        // print_r('<br>');
        // print_r('Observaçoes: ' . $_POST['observaçoes']);

        include_once('config.php');

        $veiculos = $_POST['veiculo'];
        $placa = $_POST['placa'];
        $cor = $_POST['cor'];
        $clientelocal = $_POST['situação'];
        $data = $_POST['datat'];
        $observação = $_POST['observaçoes'];

        $result = mysqli_query($conexao, "INSERT INTO fdv(veiculos,placa,cor,clientelocal,datat,observação) VALUES ('$veiculos', '$placa', '$cor', '$clientelocal', '$data', '$observação')");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de veiculos</title>
    <link rel="stylesheet" href="./assets/global.css"></style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Veiculos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="veiculo" id="veiculo" class="inputUser" style="text-transform: uppercase;" required>
                    <label for="veiculo" class="labelInput">Veiculo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="placa" id="placa" class="inputUser" style="text-transform: uppercase;" required>
                    <label for="placa" class="labelInput">Placa</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="cor" id="cor" class="inputUser" required>
                    <label for="cor" class="labelInput">Cor</label>
                </div>
                <p>Cliente estava no local?</p>
                <input type="radio" id="yes" name="situação" value="yes" required>
                <label for="yes">Sim</label>
                <br>
                <input type="radio" id="no" name="situação" value="no" required>
                <label for="no">Não</label>
                <br>
                
                <br><br>
                <label for="datat"><b>Data:</b></label>
                <input type="date" name="datat" id="datat" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="observaçoes" id="observaçoes" class="inputUser">
                    <label for="observaçoes" class="labelInput">Observação</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser">
                    <label for="estado" class="labelInput">Continuação</label>
                </div>
                <br><br>
                
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

    <h2>Pesquisa de Veiculos</h2>
    <form action="busca.php" method="GET">
        <label>Veiculo<label>
        <input type="text" name="fdv_nome" size="50" placeholder="Veiculos">
        <button>Buscar</button>
    </form>

</body>
</html>