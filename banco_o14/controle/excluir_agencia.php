<?php
include("conexao.php");
$conn = conectar();
try{
    $agencia = $POST['cbx_agencia'];
    if(isset($agencia)){
        $stm = $conn->prepare("DELETE FROM agencia WHERE cod_agencia=?");
        $stm->bindValue(1,$agencia,PDO::PARAM_STR);
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