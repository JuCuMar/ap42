<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 4</title>
</head>

<body>
    <h1>Ejercicio 4</h1>

    <?php
//http://localhost:8080/AP42/ejercicio4.php

   $arr = [1,2,3,4,4,5,2,7,8];
   $separacion = [], [];
 

   foreach($arr as $numeros){
    if ($numeros % 2 == 0){
        $separacion[0] [] = $numeros;

    } else {
     $separacion[1] [] = $numeros;
    }
   }
  echo "Pares: " . implode(", ", $separacion[0]) . "\n";
  echo "Impares: " . implode(", ", $separacion[1]) . "\n";
    ?> 
</body>
</html>