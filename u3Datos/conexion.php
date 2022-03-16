<?php
    //Archivo de configuración y conexion a un servidor MYSQL
    //Variables de conexion

    //$servername = "localhost";
    $servername = "127.0.0.1";
    $username = "root";
    $password =  "";
    $database = "topicosu3";

    //Crear la conexion por MYSQLi Procedural
    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        echo("Conexion Fallida".mysqli_connect_error());
    }
    else{
        //echo("Conexion Exitosa");
        //Primer paso tener la conexion listo
        //Segundo paso crear un Query (Solicitud al servidor)
        $querySQL = "Select * From datos";
        //C-reate R-ead U-pdate D-elete
        //C - Insert Into
        //R - Select
        //U - Update Set /Where
        //D - Delete /Where
        //Tercer Ejecutar el Query en el servidor y retornar datos
        $result = mysqli_query($conn, $querySQL);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "id: ".$row["Id"].
                " - Nombre: ".$row["Nombre"].
                " - Apellido: ".$row["Apellido"].
                " - Edad: ".$row["Edad"]."</br>";
            }
        }
        else{
            echo "La Tabla no tiene registros";
        }
    }
?>