<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 3</title>
</head>

<body>
    <h1>Ejercicio 3</h1>

    <?php
//http://localhost:8080/AP42/ejercicio3.php

   $arr = [1,2,3,4,4,5,2,7,8];
   $pares = [];
   $inpares = [];

   foreach($arr as $numeros){
    if ($numeros % 2 == 0){
        $pares[] = $numeros;

    } else {
     $impares[] = $numeros;
    }
   }
  echo "Pares: " . implode(", ", $pares) . "\n";
  echo "Impares: " . implode(", ", $impares) . "\n";
    ?> 
</body>
</html>