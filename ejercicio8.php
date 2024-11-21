<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 7</title>
</head>

<body>
    <h1>Ejercicio 7</h1>

    <?php
//http://localhost:8080/AP42/ejercicio7.php
$arr = [
    [1, 5, 8, 5],
    [7, 3, 2, 4],
    [1, 6, 2, 4]];

$transpuesta = [];

$columnas = count($arr[0]);

for ($i = 0; $i < $columnas; $i++) {
    $transpuesta[$i] = [];
    foreach ($arr as $fila) {
        $transpuesta[$i][] = $fila[$i];
    }
}
var_dump($transpuesta);
?> 
</body>
</html>