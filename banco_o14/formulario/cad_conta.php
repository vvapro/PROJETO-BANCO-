<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco o14</title>
    <?php
include("../controle/conexao.php");
$conn = conectar();
?>
</head>
<body>
    <h3>CADASTRO DE CONTA</h3>
    <form method="post" action="../controle/inserir_conta.php">
        <fieldset>
            <legend><h3>CADASTRO DE CONTA</h3></legend>
            <label>Cliente:</label><br><?php require_once("../modulo/select_cliente.php");?><br>
            <label>Tipo da conta:</label><br><?php require_once("../modulo/select_tipo_conta.php");?><br>
            <label>agencia:</label><br><?php require_once("../modulo/select_agencia.php");?><br>
            <label>Deposito inicial:</label><br><input type="number" name="num_deposito" required><br>
                <input type="submit" value="Cadastrar"><br>
</fieldset></form></body></html>
