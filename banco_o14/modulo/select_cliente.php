<?php
$sql = 'SELECT * FROM cliente';
print "<select name='cbx_cliente'>";
foreach ($conn->query($sql) as $row){
    print "<option value='".$row['id_cliente']."'>".$row['nome_cliente']."</option>";
}
print "</select>";
?>