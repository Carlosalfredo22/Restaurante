<?php
require_once 'Conexion.php';

/* Nota: si quiere probar este funcionamiento solo debe de quitar los comentarios y pruebe los tres
  y digame despues porque razon no funciona como tal las validaciones que hice con PDO... /*
Este seria la manera indicada usando PDO para poder validar pero con el error Uncaught PDOException: SQLSTATE[42S02]:  
 Base table or view not found: 1146 Table 'restaurantsv.users' doesn't exist.

if (!empty($_POST['email']) && !empty($_POST['contrasena'])) {
  $records = $conexion->prepare('SELECT email, contrasena FROM users WHERE email=:email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute(); //Error esta aqui es el execute que ta poblemas
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['contrasena'], $results['contrasena'])) {
      header('Location: index2.php');
  }else{
      $message = 'Sorry, Those credentials do not match';
    }
  }
  */



/* esta es segunda forma de validar los datos con PDO pero siempre me da el mismo error Uncaught PDOException: SQLSTATE[42000]:
  Syntax error or access violation: 1064 You have an error in your SQL syntax;
*/
  
/* 
if(!empty($_POST['email']) && !empty($_POST['contrasena'])){
  $sql = 'SELECT*FROM restaurantsv WHERE email = :email AND contrasena = :contrasena)';
  $stmt = $conexion->prepare($sql);
  $stmt->bindParam(':email',$_POST['email']);
  $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
  $stmt->bindParam(':contrasena', $contrasena);
  
  if ($stmt->execute()) { // El mismo error esta aqui tambien.
      header("Location: index2.php");
      $message = 'Successfully created new user';
  }else{
    echo '<script language="javascript">alert("Los Datos son Incorrecto...");</script>';
      $message = 'Sorry there must have been an issue creating your accout';
  }
}*/

/*La Unica validacion que me funcione este: pero no usa PDO pero me da estos errores
    Warning: Undefined array key "email" in C:\xampp\htdocs\RestaurantSv\index.php on line 51
    Warning: Undefined array key "contrasena" in C:\xampp\htdocs\RestaurantSv\index.php on line 52
*/
    session_start();
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena']; 
    
    $_SESSION['email']=$email;

    $conexion=mysqli_connect("localhost","root","","restaurantsv");
    $consulta="SELECT*FROM restaurantsv where email='$email' and contrasena='$contrasena'";
    $resultado=mysqli_query($conexion,$consulta);
  
    
    $filas=mysqli_num_rows($resultado);


    if($filas){
  
      header("location:index2.php");
  
  }else{

    echo"Error de auteticacion";
  }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--Estilos boostrap --><!--Nota: Cambien la ruta de estilos CSS para que no haya poblemas-->
    <link rel="stylesheet" type="text/css" href="../RestaurantSv/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../RestaurantSv/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-start">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                    <img src="../php-login2/img/L000042.png" class="img-fluid" width="90px">
                    <sub class="LG">Restaurant Sv</sub>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <!--PAGE HEADE-->
                    <div>
                        <sub class="sub1">Welcome Back</sub>
                        <sub>Restaurant</sub>
                        <sub class="sub2">Sv</sub>
                    </div>
                    <!--Fin DEL PAGE HEADER-->
                    <br><br><br><br>
                      <h1 class="texlg">Login</h1>
                    <br><br>
                      <form class="form-horizontal" method="post" action="index.php">
                            <!--Input de boton email-->
                          <div class="form-ground">
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="email" placeholder="Correo Electronico">
                              </div>
                          </div>
                        <br>
                        <!--Input de boton contraseña-->
                        <div class="form-ground">
                          <div class="col-sm-12">
                              <input type="text" class="form-control" name="contrasena" placeholder="Contrasena">
                          </div>
                        </div>
                        <br>
                          <!--Checkbox-->  
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Recordar ¿has olvidado tu contraseña?
                            </label>
                          </div>
                        <br>
                        <!--Botones-->
                          <div class="d-grid gap-2 col-12 mx-auto">
                            <button class="btn btn-primary" type="submit" style="margin-left: -182px;margin-right: 175px;">Enviar</button>
                          </div>
                        <!--Fin de los botones-->
                          <h6>¿No tienes una cuenta?<a href="../RestaurantSv/formulario.php">crear cuenta</a></h6>
                      </form>
                </div>
                  <!--Carousel-->
                  <div class="col-lg-7" style="margin-left: 436px; margin-top: -618px;">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item img1 min-vh-100 active">
                          <div class="carousel-caption d-none d-md-block">
                            <h5 class="font-weight-bold">La Mas potente del mercado</h5>
                            <a href="#" class="text-muted text-decoration-none">Visitar nuestra tienda</a>
                          </div>
                        </div>
                        <div class="carousel-item img2 min-vh-100">
                          <div class="carousel-caption d-none d-md-block">
                            <h5 class="font-weight-bold">Descubre la nueva generacion</h5>
                            <a href="#" class="text-muted text-decoration-none">Visitar nuestra tienda</a>
                          </div>
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <!--Fin del carousel-->
          </div>
    </div>

    <!--boostrap  min js y popper min js -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="../RestaurantSv/js/bootstrap.min.js"></script>
</body>
</html>