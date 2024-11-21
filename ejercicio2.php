<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2</title>
</head>

<body>
    <h1>Ejercicio 2</h1>

    <?php
//http://localhost:8080/AP42/ejercicio2.php

   $arr = [1,2,3,4,4,5,2,7];
   $tam = count($arr);
   
    for($i=0; $i<$tam ; $i++){
        $arr[$i];
        for($j=$i+1; $j<$tam ; $j++){
            if ($arr[$i] == $arr[$j]){
                echo "el numero ". $arr[$i]  . " esta repetido ";
            }
        }
    }
    ?> 
</body>
</html>