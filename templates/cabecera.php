
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastelería - "La Palmera"</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="icon" type="image/x-icon" href="templates/icono1.png">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</head>
<body background="./img/watercolor.png">

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color: #F7DAE4!important;" role="navigation">
    <a class="navbar-brand" href="index.php"><img src="https://pastelerialapalmera.cl/wp-content/uploads/2020/04/LOGO-LA-PALMERA_2020-07.png" width="150px"></a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="productos.php">Productos</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="empresa.php">Nuestra Empresa</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="mostrarCarrito.php">Carrito (<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                ?>)</a>
            </li>
        </ul>
    </div>

</nav>

<br/>
<br/>
<div class="container">