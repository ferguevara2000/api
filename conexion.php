<?php

$servername = "TouchSecurity.mssql.somee.com";
$user = "jeangr20_SQLLogin_1";
$password = "5r4d9vzu6v";
$dbname = "TouchSecurity";

try {
    $conn = new PDO("sqlsrv:server=$servername;database=$dbname",$user,$password);
    
    echo ("Conexion correcta"); 
} catch(Exception $e) {
    echo ("Error al conectar");
}
?>
