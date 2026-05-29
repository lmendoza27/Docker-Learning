<?php

echo date('H:i:s');

try {

    $server = "dblib:host=192.168.50.71:1433;dbname=bd_passarela";

    $pdo = new PDO($server, "admin", "aproDABC123*.");

    echo "<h1>Conexión EXITOSA con FreeTDS 🚀</h1>";

    $stmt = $pdo->query("SELECT @@VERSION AS version");

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
} catch (Exception $e) {
    echo "<h1>Error conexión</h1>";
    echo "<pre>";
    echo $e->getMessage();
    echo "</pre>";
}
