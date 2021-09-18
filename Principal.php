<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" >-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/styleDashboard.css">
    <title>principal</title>
  </head>
  <body>
    <div class="d-flex">
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold">Templune</h4>
            </div>
            <div class="menu">
                <a href="#" class="d-block text-light p-3 "><i class="icon ion-md-apps mr-2 lead"></i> Tablero</a>
                <a href="#" class="d-block text-light p-3"><i class="icon ion-md-people mr-2 lead"></i> Usuarios</a>
                <a href="#" class="d-block text-light p-3"><i class="icon ion-md-stats  mr-2 lead"></i> Estadisticas</a>
                <a href="#" class="d-block text-light p-3"><i class="icon ion-md-person  mr-2 lead"></i> Perfil</a>
                <a href="#" class="d-block text-light p-3"><i class="icon ion-md-settings mr-2  lead"></i> Configuracion</a> 
            </div>
        </div>
        <div class="w-100">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline position-relative my-2 d-inline-block">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
              <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
            </form>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="img/user2.png" class="img-fluid rounded-circle avatar mr-2">
                    Carlos Alfredo
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Mi Perfil</a>
                    <a class="dropdown-item" href="#">Suscripcion</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Cerrar sesion</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          </nav>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>