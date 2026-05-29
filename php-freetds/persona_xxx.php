<?php

echo date('H:i:s');

$pdo = new PDO(
    "dblib:host=192.168.50.71:1433;dbname=bd_passarela",
    "admin",
    "aproDABC123*."
);

$sql = "
    SELECT nombre, paterno, materno
    FROM persona
    WHERE codigo = '012369' OR codigo = '013473'
";

$stmt = $pdo->query($sql);

$personas = [];

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $personas[] = trim($row['nombre'] . ' ' . $row['paterno'] . ' ' . $row['materno']);
}

echo "<h2>Saludo generado</h2>";

if (count($personas) >= 2) {
    echo $personas[0] . " saluda a " . $personas[1];
} elseif (count($personas) == 1) {
    echo $personas[0] . " se saluda a sí mismo 😄";
} else {
    echo "No hay datos";
}
