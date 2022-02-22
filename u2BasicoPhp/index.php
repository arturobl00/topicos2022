<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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

            $suma = 1 + 6;
            echo "<p>Suma: $suma</p>";
            $numCadena = "7";
            $suma = $suma + $numCadena;
            echo "<p>Suma alterado: $suma</p>";
            $suma1 = $numCadena + $suma;
            echo "<p>Suma alterado2: $suma1</p>";
            $numString = "10";
            $numInt = (int) $numString;
            echo "<p>Proceso Casting de string a numero: $numInt</p>";
            $numString = (string) $numInt;
            $numString = $numString."Hola";
            //Para concatenar variables como cadena usamos el . antes o despues o ambos
            echo "<p>Proceso sumar caracteres: $numString</p>";
            $numString = "Soy".$numString." a todos";
            echo "<p>Proceso sumar caracteres2: $numString</p>";
        ?> 
        <h2>Formularios con PHP</h2>
        <h3>Primero Formulario Metodo POST</h3>
        <form method="POST">
          <h4>Formulario que solicita 2 numeros y los suma</h4>
          <p><input type="text" class="form-control" name="nuno" value="" placeholder="Primero numero"/></p>  
          <p><input type="text" class="form-control" name="ndos" value="" placeholder="Segundo numero"/></p>
          <p><input type="submit" class="btn btn-warning" value="Sumar" name="boton"/></p>    
        </form>
        <br/>
    <form class="row g-3 needs-validation" novalidate method="POST">
    <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" name="fname" required/>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" name="lname" required/>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required name="user">
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required name="city">
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required name="estado">
      <option selected disabled value="">Choose...</option>
      <option>Puebla</option>
      <option>Oaxaca</option>
      <option>Tlaxcala</option>
      <option>Jalisco</option>
      <option>Veracruz</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required name="zip">
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <input type="submit" class="btn btn-primary" value="Submit form" name="boton"/>
  </div>
</form>

        <?php
            if ($_POST){
                $boton = $_POST["boton"];
                if($boton == "Sumar"){
                    $nuno = $_POST["nuno"];
                    $ndos = $_POST["ndos"];
                    //echo "Primero $nuno, Segundo $ndos";
                    if($nuno != Null && $ndos != Null){
                        $nuno = $nuno + $ndos;
                        echo "El resultado de la suma es $nuno";
                    }
                }
                else{
                    $fname = $_POST["fname"];
                    $lname = $_POST["lname"];
                    $user = $_POST["user"];
                    $city = $_POST["city"];
                    $estado = $_POST["estado"];
                    $zip = $_POST["zip"];
                    echo "Gracias Recibimos tus datos.<br/>
                    Bienvenido: $fname $lname.<br/>
                    Te estaremos enviando tu paquete a la direccion: $city - $estado - $zip.<br/>
                    Tu usuario quedo registrado como: $user";
                }
            }
        ?>

        <br/>
</div>

</body>
</html>