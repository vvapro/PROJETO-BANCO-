<?php
$sql = 'SELECT * FROM tipo_conta';
print"<select name='cbx_tipo_conta'>";
foreach($conn->query(sql) as $row){
    print "<option value='".$row['conta']."'>".$row['tipo_conta']."</option>";
}
print "</select>";
?>