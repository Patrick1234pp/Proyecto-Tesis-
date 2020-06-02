<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';

 require 'global/baseDeDatosUsuarios.php';

 $message = '';

 if (!empty($_POST['email']) && !empty($_POST['password'])) {
   $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
   $stmt = $conn->prepare($sql);
   $stmt->bindParam(':email', $_POST['email']);
   $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
   $stmt->bindParam(':password', $password);
 }
   
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrar</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

   <h1>....</h1>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>


   
    <h1>Detalles del cliente</h1>
    <span>o <a href="registrar.php">Acceder</a></span>

    <form action="registrar.php" method="POST">
    
      <input name="email" type="text" placeholder="Ingrese su email">
      <input name="password" type="password" placeholder="Ingrese su contraseña">
      <input name="confirm_password" type="password" placeholder="Confirme su contraseña">
      <input type="submit" value="Confirmar">
    </form>

  </body>

  
</html>

<?php include 'templates/pie.php'; ?>