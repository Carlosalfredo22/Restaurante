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
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
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
                    Nombre
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Mi Perfil</a>
                    <a class="dropdown-item" href="#">Suscripcion</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../Restaurante/index.php">Cerrar sesion</a>
                </div>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <div id="content">
            <section class="py-3">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-9">
                        <h1 class="font-weight-bold mb-0">Bienvenidos...</h1>
                        <p class="lead text-muted">Revisar la ultima informacion</p>
                    </div>
                    <div class="col-lg-3 d-flex">
                        <button class="btn btn-primary w-100 align-self-center">Descargar reporte</button>
                    </div>

                    </div>
                </div>
            </section>

            <section class="bg-mix">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Ingresos Mensuales</h6>
                                        <h3 class="font-weight-bold">$50,00</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>50.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Ingresos Mensuales</h6>
                                        <h3 class="font-weight-bold">$50,00</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>50.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                        <div class="mx-auto">
                                        <h6 class="text-muted">Ingresos Mensuales</h6>
                                        <h3 class="font-weight-bold">$50,00</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>50.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Ingresos Mensuales</h6>
                                        <h3 class="font-weight-bold">$50,00</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>50.50%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Numero de usuarios de paga</h6>
                                </div>
                                <div class="card-body">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Ventas recientes</h6>
                                </div>
                                <div class="card-body p col-md-6t-2">
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                            <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0">$250</h6><span class="badge
                                            badge-success ml-2">10% descuento</span>
                                            <small class="d-block text-muted">Curso dise??o web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                            <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0">$250</h6><span class="badge
                                            badge-success ml-2">10% descuento</span>
                                            <small class="d-block text-muted">Curso dise??o web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                            <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0">$250</h6><span class="badge
                                            badge-success ml-2">10% descuento</span>
                                            <small class="d-block text-muted">Curso dise??o web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                            <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0">$250</h6><span class="badge
                                            badge-success ml-2">10% descuento</span>
                                            <small class="d-block text-muted">Curso dise??o web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2 mb-3">
                                        <div class="d-flex mr-3">
                                            <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0">$250</h6><span class="badge
                                            badge-success ml-2">10% descuento</span>
                                            <small class="d-block text-muted">Curso dise??o web</small>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100">Ver todas</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js" integrity="sha256-bC3LCZCwKeehY6T4fFi9VfOU0gztUa+S4cnkIhVPZ5E=" crossorigin="anonymous"></script>
    <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020'],
        datasets: [{
            label: 'Nuevos usuarios',
            data: [50, 100, 150, 200],
            backgroundColor: [
                '#12C9E5',
                '#12C9E5',
                '#12C9E5',
                '#111b54'
            ],
            maxBarThickness: 30,
            borderColor: [
                'rgba(128, 128, 128)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

</body>
</html>