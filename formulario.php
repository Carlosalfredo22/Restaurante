<?php
require_once 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];    
    
    //$conexion=mysqli_connect('localhost','root','','restaurantsv');
    /*Esta conexion mysqli_connect permite crear una conexion en el mismo archivo, 
    sin la necesidad de crear un archivo aparte, para la conexion que permita
        conectar a la base de datos directamente*/
    $insertar = "INSERT INTO restaurantsv (nombre,apellido,edad,email,contrasena)
    VALUES('$nombre','$apellido','$edad','$email','$contrasena')";
    $resultado=mysqli_query($conexion,$insertar);

    
    if($resultado){
        echo '<script language="javascript">alert("Se Enviando Correctamente");</script>';
    }
    else{
        echo '<script language="javascript">alert("No es Enviando Correctamente...");</script>';
    }
    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario2</title>
    <link rel="stylesheet" type="text/css" href="../RestaurantSv/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../RestaurantSv/css/style2.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
            <img src="../Formulario2/img/L000042.png" class="img-fluid" width="90px">
            <sub class="LG">Restaurant Sv</sub>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <!--PAGE HEADE-->
            <div class="page-header">
                <sub class="sub3">Welcome Back</sub>
                <sub>Restaurant <sub class="sub2">SV</sub></sub>
                <br><br><br>
                <h6>¡Si Eres nuevo! Por favor, ingrese su datos para crear una cuenta.</h6>
            </div>
            <!--Fin DEL PAGE HEADER-->
            <br>
            <form class="form-horizontal" method="post" action="formulario.php">
                <!--Input de boton nombre-->
                <div class="form-ground">
                    <div class="col-sm-20">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                </div>
                <br>
                <!--Input de boton apellido-->
                <div class="form-ground">
                    <div class="col-sm-20">
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                    </div>
                </div>
                <br>
                <!--Input de boton Edad-->
                <div class="form-ground">
                    <div class="col-sm-20">
                        <input type="text" class="form-control" name="edad" placeholder="Edad">
                    </div>
                </div>
                <br>
                <!--Input de boton email-->
                <div class="form-ground">
                    <div class="col-sm-20">
                        <input type="text" class="form-control" name="email" placeholder="Correo Electronico">
                    </div>
                </div>
                <br>
                <!--Input de boton contraseña-->
                <div class="form-ground">
                    <div class="col-sm-20">
                        <input type="password" class="form-control" name="contrasena" placeholder="Contrasena">
                    </div>
                </div>
                <br>
                <!--Input de boton repetir contraseña-->
                <div class="form-ground">
                    <div class="col-sm-20">
                        <input type="password" class="form-control" name="confirmar_contrasena" placeholder="Repita la contrasena">
                    </div>
                </div>
                <br>
                <!--Input de boton de enviar-->
                    <div class="btn-ground">
                        <button type="submit" class="btn btn-dark" name="btn-Enviar">Enviar</button>
                        <button type="button" class="btn btn-outline-primary" style="margin-left: 44px;"><a href="../RestaurantSv/index.php">Regresar</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>