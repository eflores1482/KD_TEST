<?php

function connKDP(){
try {
    $conn = new PDO("sqlsrv:server = tcp:kdportal-server.database.windows.net,1433; Database = kdportal-database", "kdportal-server-admin", "H$Suhxt$b14XW1O5");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


$connectionInfo = array("UID" => "kdportal-server-admin", "pwd" => "H$Suhxt$b14XW1O5", "Database" => "kdportal-database", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:kdportal-server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
}

?>