<?php
require_once("funciones.php");

session_start();

if (isset($_SESSION['nombre'])){
  header('location: index.php');
}




  if ($_POST) {

    //VALIDACION Email
    if (!isset($_POST['email'])){
      $error['email']= "Completar con el email o usuario";
    } else if ($_POST['email']){
      $email= $_POST['email'];
    }
    //VALIDACION Contraseña
    if (empty($_POST['password'])) {
      $error['password']= "Ingresa tu contraseña";
    }
    //VERIFICA existencia de usuario
    else if (!verificarUsuario($_POST['email'], $_POST['password'])){
      $error['password']= "La contraseña no coincide con el email. Si nunca te registraste, hacelo <a href='registro.php'>aquí</a>.";
    }

    //Guarda cookie y redirecciona
    else if (isset ($_POST['recordarme'])){
      setcookie('email', $_POST['email'], time()+ 3600 * 24 * 7); // cambie 'email' por 'nombre'
      $_SESSION = verificarUsuario($_POST['email'], $_POST['password']);
      header ("location: index.php"); // cambie el Location, antes binevenido.php, ahora index.php
   } else {
      $_SESSION = verificarUsuario($_POST['email'], $_POST['password']);
      header ("location: index.php");
    }
  }

 ?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>DH - Proyecto</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/header.css">
      <link rel="stylesheet" href="css/fonts.css">
      <link rel="stylesheet" href="css/footer.css">
      <link rel="stylesheet" href="css/ingresar.css">
      <link href="https://fonts.googleapis.com/css?family=EB+Garamond|News+Cycle" rel="stylesheet">
      <title>Sale de invierno</title>
      <script src="https://use.fontawesome.com/bb1fbcebba.js"></script>

   </head>
  <body>
     <?php include('header.php') ?>
      <br>
      <br>

      <div class="container">
        <section class="formulario">
          <h1>Iniciar sesión</h1>
          <span>

          </span>
          <form class="sesion" action="ingresar.php" method="post">
            <div class="datos">
              <label for="email">Email o usuario :</label>
              <input type="text" name="email" id="email" placeholder="E-mail o Usuario" value="<?php
                if(isset($_COOKIE['email'])) {
                  echo $_COOKIE['email'];
                } else if (isset($email)){
                  echo $email;
                }
              ?>">
              <?php echo isset($error['email']) ? $error['email'] : "" ?>
              <label for="contraseña">Contraseña :</label>
              <input type="password" name="password" id= "password" placeholder="Contraseña">
              <?php echo isset($error['password']) ? $error['password'] : "" ?>
            </div>
            <div class="abajo">
              <div class="">
                <input type="checkbox" name="recordarme" value="">
                <label for="">Recordarme</label>
              </div>
              <div class="boton">
                <input type="submit" value="Iniciar sesion">
                <a href="#">Olvide mi contraseña.</a>
              </div>
            </div>
          </form>
        </section>
      </div>

      <?php include('footer.php') ?>
  </body>
</html>
