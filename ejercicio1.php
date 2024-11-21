<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>

    <?php
    //http://localhost:8080/AP42/ejercicio1.php
   $arr = [1,2,3,4];
   $tam = count($arr);
    for($i=$tam-1; $i>=0 ; $i--){
        echo $arr[$i];
    }
    ?> 
</body>
</html>
