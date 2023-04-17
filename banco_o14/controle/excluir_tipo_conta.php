<?php
include("conexao.php");
$conn = conectar();
try{
    $tipo_conta = $POST['cbx_tipo_conta'];
    if(isset($tipo_conta)){
        $stm = $conn->prepare("DELETE FROM tipo_conta WHERE conta=?");
        $stm->bindValue(1,$tipo_conta,PDO::PARAM_STR);
        $stm->execute();
        echo'
        <script>
        alert("Registro excluido com sucesso!");
        window.location.href = "../index.html";
        </script>
        ';
    }
}catch(PDOException $ex_){
    echo 'Erro'. $ex_->getMessage();
}
?>