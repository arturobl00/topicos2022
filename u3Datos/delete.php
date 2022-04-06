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
          <a class="nav-link" href="update.php">Actualizar Datos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Eliminar Datos</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
 
<div class="row">
    <div class="col-md-12">
        <h2 class="mt-4">Eliminar Registro Busqueda</h2>
        <hr>
        <form method="POST">
          <div class="form-group">
                <label for="campo">Campo:</label>
                <select name="campo" id="campo" class="form-select">
                  <option value="id">#ID</option>
                  <option value="nombre">#NOMBRE</option>
                  <option value="apellido">#APELLIDO</option>
                  <option value="estado">#ESTADO</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" name="valor" id="valor" class="form-control"/>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="buscar" value="Buscar" class="btn btn-primary"/>
                <a class="btn btn-success" href="index.php">Terminar</a>
            </div>
        </form>
    </div>
</div>
<br>
<?php
    if($_POST){
        include 'conn.php';
        //Mis Variables
        $valor = $_POST['valor'];
        $campo = $_POST['campo'];
        
        switch ($campo){
            case "id":
                $querySelect = "SELECT * FROM datos WHERE Id = $valor";
                break;
            case "nombre":
                $querySelect = "SELECT * FROM datos WHERE Nombre = '$valor'";
                break;
            case "apellido":
                $querySelect = "SELECT * FROM datos WHERE Apellido = '$valor'";
                break;
            case "estado":
                $querySelect = "SELECT * FROM datos WHERE Estado = '$valor'";
                break;
        }
        $resultado = mysqli_query($conn, $querySelect);

        if($resultado){
          echo "<table class='table'>
          <thead class='table-dark'>
          <tr>
              <th scope='col'>#ID</th>
              <th scope='col'>#NOMBRE</th>
              <th scope='col'>#APELLIDO</th>
              <th scope='col'>#EDAD</th>
              <th scope='col'>#ESTADO</th>
              <th scope='col'>#ACCIÓN</th>
            </tr>
          </thead>
          <tbody>";
          $ruta = "";
          while($row = mysqli_fetch_assoc($resultado)){
            echo "<tr><th scope='row'>".$row["Id"].
            "</th><td>".$row["Nombre"].
            "</td><td>".$row["Apellido"].
            "</td><td>".$row["Edad"].
            "</td><td>".$row["Estado"].
            "</td><td><a href='delete2.php?id=".$row["Id"]."&nombre=".$row["Nombre"]."&apellido=".$row["Apellido"]."&edad=".$row["Edad"]."&estado=".$row["Estado"]." 'class='btn btn-danger'>Eliminar</a></td>";
          }
          echo "</tbody>
          </table>";        
        }else{
            echo "No hay Registros con Coinsidencia";
        }
    }
?>
</body>
</html>