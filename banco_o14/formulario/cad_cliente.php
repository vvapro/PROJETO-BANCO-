<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>banco_o14</title>
    <?php
include("../controle/conexao.php");
$conn = conectar();
?>
</head>
<body>
    <form method="post" action="../controle/inserir_cliente.php">
        <fieldset>
            <legend><h3>CADASTRO DE CLIENTE</h3></legend>
            <label>Nome do cliente:</label>
            <input type="text" name="txt_nome" required><br>
            <label>Bairro:</label><br>
            <?php require_once ("../modulo/select_bairro.php");?><br>
                <input type="submit" value="Cadastrar"><br>
</form>
</fieldset>
</body>
</html>