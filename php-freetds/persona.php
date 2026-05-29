<?php

echo date('H:i:s');

$pdo = new PDO(
    "dblib:host=192.168.50.71:1433;dbname=bd_passarela",
    "admin",
    "aproDABC123*."
);

$sql = "SELECT * FROM persona WHERE codigo = '012369'";

$stmt = $pdo->query($sql);

echo "<h2>Resultado persona</h2>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
