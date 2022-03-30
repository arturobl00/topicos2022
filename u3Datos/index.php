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
          <a class="nav-link active" aria-current="page" href="#">Mostrar Datos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="insert.php">Insertar Datos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="update.php">Actualizar Datos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Eliminar Datos</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 

<h1>Registros de la Tabla Datos</h1>
<table class="table">
  <thead class="table-dark">
  <tr>
      <th scope="col">#ID</th>
      <th scope="col">#NOMBRE</th>
      <th scope="col">#APELLIDO</th>
      <th scope="col">#EDAD</th>
      <th scope="col">#ESTADO</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include 'conn.php';
        $querySQL = "Select * From datos";
        $result = mysqli_query($conn, $querySQL);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr><th scope='row'>".$row["Id"].
                "</th><td>".$row["Nombre"].
                "</td><td>".$row["Apellido"].
                "</td><td>".$row["Edad"].
                "</td><td>".$row["Estado"]."</td>";
            }
        }
        else{
            echo "La Tabla no tiene registros";
        }
    ?>
  </tbody>
</table>
</body>
</html>