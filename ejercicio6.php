<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 6</title>
</head>

<body>
    <h1>Ejercicio 6</h1>

    <?php
//http://localhost:8080/AP42/ejercicio6.php

   $arr = [3,2,1,4,4,5,2,7,8,5];
   array_splice($arr,2,1);
   array_splice($arr,7,1);
   $var1 = implode(", ",$arr);
   echo $var1. "<br>";
   $tam=count($arr);
   $acumulador = 0;
   $media = 0;
   for($i=0; $i<$tam; $i++) { 
    $acumulador= $acumulador+$arr[$i];
    $media = $acumulador/ $tam;
   }
   echo "la media de nostas restantes es un: ". $media;
   var_dump($arr);

    ?> 
</body>
</html>