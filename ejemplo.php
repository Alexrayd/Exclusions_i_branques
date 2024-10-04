<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$dades = array(
    ['Nom' => 'Nom', 'Primer Cognom' => 'Primer Cognom', 'Segon Cognom' => 'Segon Cognom', 'Data naix.' => 'Data naix.', 'DNI' => 'DNI'],
    ['Nom' => 'Anselm', 'Primer Cognom' =>   'Pérez', 'Segon Cognom' => 'García', 'Data naix.' => '1980-01-15', 'DNI' => '12345678A'],
    ['Nom' => 'Eustaquia', 'Primer Cognom' => 'López', 'Segon Cognom' => 'Rodríguez', 'Data naix.' => '1990-05-20', 'DNI' => '87654321B'],
    ['Nom' => 'Bonifaci', 'Primer Cognom' => 'García', 'Segon Cognom' => 'García', 'Data naix.' => '1998-07-21', 'DNI' => '94255624S']
);
echo "<table>";

$i=0;
$cont=true;
echo "<thead><tr>";
foreach ($dades[0] as $clau) {
    echo "<th>{$clau}</th>";
}
echo "</tr></thead>";


echo "<tbody>";
foreach ($dades as $fila) {
    if($cont==false)    
    {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>{$valor}</td>";
        }
        echo "</tr>";
    }
    $cont=false;
}
echo "</tbody>";
echo "</table>";
?>
<table></table>
</body>
</html>
