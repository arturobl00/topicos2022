<?php
    //Funciones Ejemplo

    //Función sin Parametros
    function saludo(){
        echo "Hola como estas?, Buenos días ";
    }

    //Función con Parametros
    function saludoPersonalizado($nombre){
        echo "Hola que tal $nombre, espero que estes teniendo un gran día"; 
    }

    function sumarn ($d1, $d2){
        $d1 = $d1 + $d2;
        echo "El resultado de la suma es: $d1";
    }

    //Función con Parametros y Return
    function sumarr($d1,$d2){
        $d1 = $d1 + $d2;
        return $d1;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>FUNCIONES EN PHP</title>
</head>
<body>
<div class="container">
        <h1 class="display-4">Manejo de Funciones en PHP Sin Parametros, Con Parametros y Con Return</h1>
        <h2>Ejemplo 1 - Función sin Parametros</h2>
        <p>Consumiento una función que saluda. Este es el saludo: <?php saludo(); saludo(); saludo();?></p>
        <br/>

        <h2>Ejemplo 2 - Función con Parametros</h2>
        <p>Consumiento una función que saluda proporcionando un parametro de nombre. Este es el saludo: <?php saludoPersonalizado("Marly");?></p>
        <br/>

        <h2>Ejemplo 2.1 - Función con Parametros</h2>
        <p>Consumiento una función que Suma dos numeros, Resultado: <?php sumarn(50,80);?></p>
        <br/>

        <h2>Ejemplo 3 - Función con Parametros y Return</h2>
        <p>Consumiento una función que Suma dos numeros y los manda a una variable, Resultado:
             <?php 
                $resultado = sumarr(20,90);
                echo $resultado;
             ?>
        </p>
        <br/>
    </div>
</body>
</html>


