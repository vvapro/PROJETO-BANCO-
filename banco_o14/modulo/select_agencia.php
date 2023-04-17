<?php
$sql = 'SELECT * FROM agencia';
print"<select name='cbx_agencia'>";
foreach($conn->query(sql) as $row){
    print "<option value='".$row['num_agencia']."'>".$row['num_agencia']."</option>";
}
print "</select>";
?>