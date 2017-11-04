<?php

require_once("funciones.php");
require_once('classes\Validacion.php');
require_once('classes\Conexion.php');
require_once('classes\User.php');

  if ($_POST) {

    $user1 = new User();
    $user1->ingresar($_POST);
    //$erroresLog = $user1->getErrores();
  }
   // CIERRA EL PHP ?>

<header>
  <div class="izquierda">
    <div class="img-logo">
      <a href="index.php"><img src="images/hs-logo.png" alt=""></a>
    </div>

    <form class="buscador" action="index.html" method="post">
      <input type="text" name="" value="" placeholder="Estoy buscando...">
      <button type="submit" name="button">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </form>

  </div>
  <div class="derecha">
    <input type="checkbox" id="menu">
    <label for="menu" class="menu">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </label>

    <nav>
      <ul>
        <li class="movil">
          <form class="buscador-movil" action="index.html" method="post">
           <input type="text" name="" value="" placeholder="Estoy buscando...">
           <button type="submit" name="button">
              <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
           </button>
          </form>
        </li>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="faqs.php">FAQ</a>
        </li>
        <li>
          <a href="<?php echo isset($_SESSION['nombre'])? 'misDatos.php' : 'registro.php'?>"><?php echo isset($_SESSION['nombre']) ? "Mi Perfil" : 'Registrarse' ?></a>
        </li>
        <li>
          <a href="ingresar.php" id="hover"><?php echo isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : 'Ingresar' ?></a>
          <div class="ingreso">
            <?php if (isset($_SESSION['nombre'])){
              echo '<div class="opciones">
                <a href="misDatos.php">Mis datos</a>
                <a>Compras</a>
                <a>Favoritos</a>
                <a href="cerrarsesion.php">Cerrar sesión</a>
              </div>';
              } else {
              echo '<form class="" action="ingresar.php" method="post">
                 <div class="ingreso-arriba-arriba">
                   <label for="usuario">Usuario o e-mail</label>
                   <input type="text" name="email" value="'; if(isset($_COOKIE['email'])) {
                     echo $_COOKIE['email'];
                   } else if (isset($_POST['email'])){
                     echo $_POST['email'];
                   } ;

                   echo' " id="usuario" placeholder="usuario">
                   <label for="pass">Contraseña</label>
                   <input type="password" name="password" value="" id="pass" placeholder="Contraseña">
                 </div>
              <div class="ingreso-arriba">
                  <input type="checkbox" name="recordarme" value="" id="recordarme">
                  <label for="recordarme">Recordame</label>
              </div>
              <div class="ingreso-abajo">
                  <input type="submit" name="btn-session" value="Iniciar sesión">
                   <a href="#">Olvide mi contraseña</a>
              </div>
            </form>';
            } ?>

         </div>
        </li>

      </ul>
    </nav>
  </div>
  </header>
