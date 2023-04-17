<?php
include("conexao.php");
$conn = conectar();
try{
    $usuario = $POST['cbx_usuario'];
    if(isset($usuario)){
        $stm = $conn->prepare("DELETE FROM usuario WHERE cod_usuario=?");
        $stm->bindValue(1,$usuario,PDO::PARAM_STR);
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