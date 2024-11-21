<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 5</title>
</head>

<body>
    <h1>Ejercicio 5</h1>

    <?php
//http://localhost:8080/AP42/ejercicio5.php

   $arr = [1,2,3,4,4,5,2,7,8];

   $rep = [];

  
   foreach ($arr as $numero) {
    if (array_key_exists($numero, $rep)) {
        $rep[$numero]++;
    } else {
        $rep[$numero] = 1;
    }
}

foreach ($rep as $valor => $cantidad) {
    echo "El número $valor se repite $cantidad veces.<br/>" ;
}

    ?> 
</body>
</html>