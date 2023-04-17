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
    $tipo_conta = $_POST['txt_tipo_conta'];
    if(isset($tipo_conta)){
        $stmt = $conn->prepare("INSERT INTO tipo_conta(nome_tipo_conta) VALUES (?)");
        $stmt->bindValue(1,$tipo_conta,PDO::PARAM_STR);
        $stmt->execute();
    }
    echo '<script>
    alert("registro salva com sucesso");
    window.location,href = "../formulario/cad_tipo_conta.php";
    </script>';
}catch(PDOExpection $ex_){
    echo'Erro'. $ex_->getMessage();
}
?>
</body>
</html>