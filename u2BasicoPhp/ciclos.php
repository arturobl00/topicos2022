<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Manejo de Ciclos en PHP</title>
</head>
<body>
<div class="container">
        <h1 class="display-4">Manejo de Coclos While, Do, For en PHP</h1>
        <h2>Ejemplo 1 - Ciclo While</h2>
        <?php
            //Practica uno ciclo while
            $numero = 1;

            while ($numero <= 10){
                echo "$numero - ";
                $numero = $numero + 1;
            }

            echo "<br/>";
            
            //Practica uno ciclo while endwhile
            echo "<h2>Ejemplo 2 - Ciclo While endwhile</h2>";
            $numero = 1;
            while ($numero <= 10):
                echo "$numero - ";
                $numero = $numero + 1;
            endwhile;

            echo "<br/>";
            
            //Practica uno ciclo Do while
            echo "<h2>Ejemplo 3 - Ciclo Do While</h2>";
            $numero = 1;
            do{
                echo "$numero - ";
                $numero++;
            }while($numero<=10);

            //Practica uno ciclo for
            echo "<h2>Ejemplo 4 - Ciclo For</h2>";
            for($numero=1; $numero<=10; $numero++){
                echo "$numero - ";
            }

            //Ejercicio Ciclo anidado
            $tabla = 0;
            $miltiplo = 0;
            $resultado = 0;
            echo "<h2>Ejemplo Ciclo anidado Tablas del multiplicar</h2>";
            for($tabla=1; $tabla<=10; $tabla++){
                for($multiplo=1; $multiplo<=10; $multiplo++){
                    $resultado = $tabla * $multiplo;
                    echo "<p>$tabla X $multiplo = $resultado</p>";
                }
            }
        ?>
    </div>
</body>
</html>