<?php
include("conexao.php");
$conn = conectar();

try{
    $cliente = $_POST["txt_nome"];
    $bairro = $_POST["cbx_bairro"];
    if(isset($cliente)){
    $stmt = $conn->prepare("INSERT INTO cliente(nome_cliente,bairro_cliente)VALUES (?,?)");
    $stmt->bindvalue(1,$cliente,PDO::PARAM_STR);
    $stmt->bindvalue(2,$bairro,PDO::PARAM_STR);
    $stmt->execute();
    echo'<script>
    alert("registro salvo com sucesso!");
    window.location.href = "../formulario/cad_cliente.php";
    </script>';
    }else{ echo'<script>
        alert("Cliente não definido!");
        window.location.href = "../formulario/cad_cliente.php";
        </script>';
    }
}catch(PDOException $ex_){
    echo 'erro' . $ex_->getMessage();
}
?>
