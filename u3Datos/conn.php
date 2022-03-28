<?php
$servername = "127.0.0.1";
$username = "root";
$password =  "";
$database = "topicosu3";

//Crear la conexion por MYSQLi Procedural
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    echo("Conexion Fallida".mysqli_connect_error());
}
?>