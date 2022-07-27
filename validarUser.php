<?php

if (isset($_REQUEST['ruc']) && isset($_REQUEST['password'])) {
	
include 'conexion.php';
//$ruc=$_REQUEST['ruc'];
//$password=$_REQUEST['password'];

$ruc="1801085877001";
$password="n3mgW624bPsKfxd";

$sql = "SELECT * FROM Empresas WHERE Ruc='$ruc' AND Contrasenia='$password'";

$result = sqlsrv_query($conn, $sql);

while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC) {
    echo($row['Ruc']);
	echo("<br/>");
}

sqlsrv_close($conn);
}
?>