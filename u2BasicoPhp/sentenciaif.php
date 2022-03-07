<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Trabajando con Sentencias IF y Ciclos</title>
</head>
<body>
    <div class="container">
        <h1 class="display-4">Manejo de IF en PHP</h1>
        <h2>Ejemplo 1 - If Simple</h2>
        <form class="form-control" method="POST">
            <h3 class="display-6">Formulario para evaluar 2 valores y determinar el mayor</h3>
            <p>Primer Valor <input type="text" name="dato1" class="form-control"/></p>
            <p>Segundo Valor <input type="text" name="dato2" class="form-control"/></p>
            <p><input type="submit" name="boton" class="btn btn-primary" value="Compara"/></p>
        </form>
        <br/>
    </div>

    <div class="container">
        <h2>Ejemplo 2 y 3 - If Anidado y Logico</h2>
        <form class="form-control" method="POST">
            <h3 class="display-6">Formulario para evaluar 2 valores y determinar el mayor</h3>
            <p>Valor A<input type="text" name="a" class="form-control"/></p>
            <p>Valor B<input type="text" name="b" class="form-control"/></p>
            <p>Valor C<input type="text" name="c" class="form-control"/></p>
            <p>Valor D<input type="text" name="d" class="form-control"/></p>
            <p><input type="submit" name="boton" class="btn btn-primary" value="Anidado"/> <input type="submit" name="boton" class="btn btn-success" value="Logico"/></p>
        </form>
        <br/>
    </div>

    <?php
            if($_POST){
                $boton = $_POST["boton"];
                if($boton == "Compara"){
                    $dato1 = $_POST["dato1"];
                    $dato2 = $_POST["dato2"];

                    //Ejercicio ejemplo

                    if($dato1 > $dato2){
                        echo "<p class='alert alert-info' role='alert'>El Valor más grande es dato 1 con: $dato1</p>";
                    }
                    else if($dato2 > $dato1){
                        echo "<p class='alert alert-info' role='alert'>El Valor más grande es dato 2 con: $dato2</p>";
                    }
                    else{
                        echo "<p class='alert alert-info' role='alert'>Ninguno es más grande son iguales</p>";
                    }
                }

                if($boton == "Anidado"){
                    $a = $_POST["a"];
                    $b = $_POST["b"];
                    $c = $_POST["c"];
                    $d = $_POST["d"];

                    if( $a == 1 || $a == 2 ) {
                        if( $b == 3 || $b == 4 ) {
                            if( $c == 5 || $d == 6 ) {
                                echo "<p class='alert alert-info' role='alert'>Se Cumplio la condición</p>";
                            }
                            else{
                                echo "<p class='alert alert-danger' role='alert'>No se Cumplio la condición</p>";
                            }
                        }
                        else{
                            echo "<p class='alert alert-danger' role='alert'>No se Cumplio la condición</p>";
                        }
                    }
                    else{
                        echo "<p class='alert alert-danger' role='alert'>No se Cumplio la condición</p>";
                    }
                }
            }
        ?>
</body>
</html>