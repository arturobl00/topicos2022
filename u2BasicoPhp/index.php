<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Unidad 2 Iniciando Basico de PHP</title>
</head>
<body>
    <div class="container">
        <h1>Unidad 2 - Basico de PHP</h1>
        <p>
            PHP es un lenguaje de secuencias de comandos de servidor y una poderosa herramienta para crear páginas web dinámicas e interactivas.
            PHP es una alternativa ampliamente utilizada, gratuita y eficiente a competidores como ASP de Microsoft.
        </p>
        Hola saludos desde PHP en HTML
        <br/>
        <?php
            //echo primer funcion en php sirve para desplegar contenido en navegador
            echo "Saludos desde PHP";
            echo "<p>Hola soy un parrafo de <code>HTML</code> desde PHP</p>";
            echo "<h2>Listado de Paises de America</h2>";
            echo "<ol><li>México</li><li>Colombia</li><li>Perú</li><li>Costarica</li><li>Argentina</li></ol>";

            echo "<h2>Listado de Paises de America 2</h2>";

            echo "<ol>
                    <li>México</li>
                    <li>Colombia</li>
                    <li>Perú</li>
                    <li>Costarica</li>
                    <li>Argentina</li>
                </ol>";

            //Variables en PHP
            $txt = "Hola soy el contenido de una variable";

            echo "<p>La variable txt es igual a - $txt</p>";

            $entero = 10;
            $doble = 20.5;
            $boleano = true;
            $enteroBig = 100000000;
            $caracter = 'A';

            echo "<h2>Listado de variables</h2>
            <ul>
                <li>Entero - $entero</li>
                <li>Doble - $doble</li>
                <li>Boleano - $boleano</li>
                <li>EnteroBig - $enteroBig</li>
                <li>Caracter - $caracter</li>
                <li>Cadena - $txt</li>
            </ul>";
        ?> 
    </div>
</body>
</html>