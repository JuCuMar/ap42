<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 7</title>
</head>

<body>
    <h1>Ejercicio 7</h1>

    <?php
//http://localhost:8080/AP42/ejercicio7.php

   $arr = [2, 5, 7, 0, 4, 0, 7, -5, 8, 0];
   $var1 = implode(", ",$arr);
   echo $var1. "<br>";

   array_splice($arr,3,1);
   array_splice($arr,4,1);

   $var2 = implode(", ",$arr);
   echo $var2. "<br>";

   array_push($arr, 0,0);
   $var3 = implode(", ",$arr);
   echo $var3. "<br>";
   
  Var_dump($arr);
    ?> 
</body>
</html>