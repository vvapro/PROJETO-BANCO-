<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco_o14</title>
</head>
<body>
<?php
include("conexao.php");
$conn = conectar();
try{
    $agencia = $_POST['cbx_agencia'];
    if(isset($agencia)){
        $stmt = $conn->prepare("INSERT INTO agencia(nome_agencia) VALUES (?)");
        $stmt->bindValue(1,$agencia,PDO::PARAM_STR);
        $stmt->execute();
    }
    echo '<script>
    alert("registro salva com sucesso");
    window.location,href = "../formulario/cad_agencia.php";
    </script>';
}catch(PDOExpection $ex_){
    echo'Erro'. $ex_->getMessage();
}
?>
</body>
</html>