<?php
include("conexao.php");
$conn = conectar();

$cliente = $_POST['cbx_cliente'];
$tipo = $_POST['cbx_tipo_conta'];
$agencia = $_POST['cbx_agencia'];
$deposito = $_POST['num_deposito'];

try{
    $sql = ("INSERT INTO conta(cliente_conta,tipo_conta,agencia_conta,saldo_conta)VALUES (?,?,?,?)");
    $stmt = $conn->prepare($sql);
    $stmt->bindvalue(1,$cliente,PDO::PARAM_STR);
    $stmt->bindvalue(2,$tipo,PDO::PARAM_STR);
    $stmt->bindvalue(3,$agencia,PDO::PARAM_STR);
    $stmt->bindvalue(4,$deposito,PDO::PARAM_STR);
    $stmt->execute();
    $stmt->closeCursor();
    $conn = null();
    echo'<script>
    alert("registro salvo com sucesso!");
    window.location.href = "../formulario/cad_conta.php";
    </script>';
}catch(PDOException $ex_){
    echo 'Erro' . $ex_->getMessage();
}
?>
