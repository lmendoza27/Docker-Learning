<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

sqlsrv_configure("WarningsReturnAsErrors", 1);
sqlsrv_configure("LogSubsystems", SQLSRV_LOG_SYSTEM_ALL);
sqlsrv_configure("LogSeverity", SQLSRV_LOG_SEVERITY_ALL);

// docker compose build

// Si sale error y cambias valores al Dockerfile usas
// docker compose build --no-cache

// docker compose up
// http://localhost:8081

// ALERTA: Esto falla por ❌ incompatibilidad TLS entre OpenSSL (Linux container) y SQL Server corporativo


echo date('H:i:s');

$serverName = "tcp:192.168.50.71,1433";
$connectionOptions = [
    "Database" => "master",
    "Uid" => "admin",
    "PWD" => "aproDABC123*.",
    "Encrypt" => "yes",
    "TrustServerCertificate" => true
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    echo "<h2>ERROR DETALLADO SQLSRV</h2>";
    echo "<pre>";
    print_r(sqlsrv_errors(SQLSRV_ERR_ERRORS));
    echo "</pre>";

    echo "<h2>WARNINGS</h2>";
    print_r(sqlsrv_errors(SQLSRV_ERR_WARNINGS));
    exit;
}

if ($conn) {
    echo "<h1>Conexión exitosa a SQL Server 🚀</h1>";

    $sql = "SELECT @@VERSION AS version";
    $stmt = sqlsrv_query($conn, $sql);

    if ($stmt) {
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            echo "
    <pre>";
            print_r($row);
            echo "</pre>";
        }
    } else {
        echo "Error ejecutando query";
        print_r(sqlsrv_errors());
    }
} else {
    echo "Error de conexión";
    echo "
    <pre>";
    print_r(sqlsrv_errors());
    echo "</pre>";
}
