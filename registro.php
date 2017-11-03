<?php
session_start();

require_once('classes\Validacion.php');
require_once('classes\Conexion.php');
require_once('classes\User.php');

if (isset($_SESSION['nombre'])){
  header ("location:index.php");
}

 require_once('funciones.php');

$nombre = "";
$apellido = "";
$email = "";
$usuario = "";
$avatar = "";


if (isset($_POST['btn-crearcuenta'])){

   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $email = $_POST['email'];
   $usuario = $_POST['usuario'];

   $user = new User();

   $user->registrarse($_POST);

   $errores = $user->getErrores();

}//fin

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
      <link rel="stylesheet" href="css/registro.css">
      <link href="https://fonts.googleapis.com/css?family=EB+Garamond|News+Cycle" rel="stylesheet">

      <title>Sale de invierno</title>
      <script src="https://use.fontawesome.com/bb1fbcebba.js"></script>

   </head>

  <body>
    <!--................... Header............................ -->
   <?php include('header.php') ?>
      <!-- ................fin Header.................. -->
    <br>
    <br>
    <div class="contenedor">
      <section class="formulario">
        <form class="registro" action="registro.php" method="post" enctype="multipart/form-data">
          <h1>Complete los siguientes datos para crearse una cuenta.</h1>

          <?php
            $errorUsuario = "";
            if(isset($errores['usuario'])){
               $errorUsuario = "errorUsuario";
            }
          ?>
          <input id= "<?php echo $errorUsuario ?>" type="text" name="usuario" value="<?php echo $usuario?>" placeholder="Usuario">
          <span  id="mens-error">
             <?php
             if(isset($errores['usuario']) ){
                echo $errores['usuario'].'<br>';
             }
             ?>
          </span>
          <div class="arriba">


             <?php
               $errorNombre = "";
               if(isset($errores['nombre'])){
                  $errorNombre = "errorNombre";
               }
             ?>
            <input id="<?php echo $errorNombre ?>" type="text" name="nombre" value="<?php echo $nombre?>" placeholder="Nombre">
            <span  id="mens-error">
               <?php
               if(isset($errores['nombre']) ){
                  echo $errores['nombre'].'<br>';
               }
               ?>
            </span>

            <?php
            $errorApellido = "";
            if(isset($errores['apellido'])){
               $errorApellido = "errorApellido";
            }
            ?>

            <input id="<?php echo $errorApellido ?>" type="text" name="apellido" value="<?php echo $apellido?>" placeholder="Apellido">
            <span  id="mens-error">
               <?php
               if(isset($errores['apellido']) ){
                  echo $errores['apellido'].'<br>';
               }
               ?>
            </span>

          </div>

            <?php
            $errorEmail = "";
            if(isset($errores['email'])){
               $errorEmail = "errorEmail";
            }

            ?>
          <input id="<?php echo $errorEmail ?>" type="email" name="email" value="<?php echo $email?>" placeholder="Email">
          <span  id="mens-error">
             <?php
             if(isset($errores['email']) ){
                echo $errores['email'].'<br>';
             }
             ?>
          </span>

          <div class="abajo">


            <?php
            $errorPass = "";
            if(isset($errores['password']) || isset($errores['confirmar-pass'])){
               $errorPass = "errorPass";
            }
            ?>
            <input id="<?php echo $errorPass?>" type="password" name="password" value="" placeholder="Contraseña">

            <input id="<?php echo $errorPass?>" type="password" name="confirmar-pass" value="" placeholder="Repita su contraseña">


          </div>

                  <!-- SPAN PARA MOSTRAR ERRORES-->

          <span  id="mens-error">
             <?php
             if(isset($errores) && $errores > 0 ){
                foreach($errores as $tipoError => $error){
                   echo $error.'<br>';
                }
             }
             ?>
          </span>

          <h3>Imagen de perfil</h3>
          <input type="file" name="avatar" class="avatar">

          <div class="aceptar">
            <div class="izquierda">
              <input name="terminos" type="checkbox" id="terminos" value="1" required>
              <label for="terminos">Acepto los <a href="#">Terminos y condiciones</a> de uso.</label>
            </div>
            <div class="derecha">
              <input name="btn-crearcuenta" type="submit" value="Crear cuenta" id="btn-crearcuenta">
              <a href="ingresar.php">¿Ya tienes una cuenta?</a>
            </div>
          </div>

        </form>
      </section>
      <div class="ingresar">
        <h2>O tambien puedes</h2>
        <div class="facebook">
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Ingresar con Facebook</a>
        </div>
        <div class="gmail">
          <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i>Ingresar con Google</a>
        </div>
         <div class="twitter">
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>Ingresar con Twitter</a>
         </div>
      </div>
    </div>

    <?php include('footer.php') ?>

  </body>
</html>
