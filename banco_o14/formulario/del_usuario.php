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
            <form method="post" action="../controle/excluir_usuario.php">
                <fieldset><legend><h2>Exclusão de usuario</h2></legend>
                <?php require_once("../modulo/select_usuario.php");?>
                <input type="submit" value="excluir">
</fieldset></form></body></html>