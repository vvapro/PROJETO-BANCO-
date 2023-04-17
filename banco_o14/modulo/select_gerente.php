<?php
$sql = 'SELECT * FROM gerente';
print"<select name='cbx_gerente'>";
foreach($conn->query(sql) as $row){
    print "<option value='".$row['cod_gerente']."'>".$row['nome_gerente']."</option>";
}
print "</select>";
?>