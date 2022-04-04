<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Sistema con Operaciones CRUD</title>
</head>
<body class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="phplogo.png" alt="Sistema CRUD" width="30" height="24">
        Topicos Av</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Mostrar Datos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="insert.php">Insertar Datos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Actualizar Datos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="delete.php">Eliminar Datos</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
 
<div class="row">
    <div class="col-md-12">
        <h2 class="mt-4">Edición de Registro</h2>
        <hr>
        <?php
            $Id = $_GET['id'];
            $Nombre = $_GET['nombre'];
            echo $Nombre;
            $Apellido = $_GET['apellido'];
            $Edad = $_GET['edad'];
            $Estado = $_GET['estado'];
        ?>
        <form method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $Nombre;?>"/>
            </div>
            <br>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $Apellido;?>"/>
            </div>
            <br>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" name="edad" id="edad" class="form-control" value="<?php echo $Edad;?>"/>
            </div>
            <br>
            <div class="form-group">
                <label for="estado">Seleccione nuevamente el Estado valor anterior: <?php echo $Estado?></label>
                <select name="estado" id="estado" class="form-select">
                  <option value="Activado">Activado</option>
                  <option value="Desactivado">Desactivado</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="guardar" value="Guardar" class="btn btn-primary"/>
                <a class="btn btn-success" href="index.php">Terminar</a>
            </div>
        </form>
    </div>
</div>
<br>
<?php
    include 'conn.php';

    if($_POST){
        //Mis Variables
        $nom = $_POST['nombre'];
        $ape = $_POST['apellido'];
        $ed = $_POST['edad'];
        $es = $_POST['estado'];

        //Comentario
        //echo $nombre, $apellido, $edad, $estado;

        $queryUpdate = "UPDATE datos SET Nombre = '$nom', Apellido= '$ape', Edad= '$ed', Estado= '$es' WHERE Id = '$Id'";
        if(!mysqli_query($conn, $queryUpdate)){
            //echo "Registro capturado </br>";
            echo "Error: ".$queryUpdate, mysqli_error($conn)."</br>";
        }
        else{
            echo "Registro Almacenado con Exito";
        }
    }
?>

</body>
</html>