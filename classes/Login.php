<?php

require_once('classes\Validacion.php');
require_once('classes\Conexion.php');
require_once('classes\User.php');

trait Login {

  public function ingresar($data) {
    //VALIDACION Email
    if (empty($data['email'])){
      $this->errores['email']= "Completar con el email o usuario";
    }
    //VALIDACION Contraseña
    if (empty($data['password'])) {
        $this->errores['password']= "Ingresa tu contraseña";

    } elseif ($data['email'] && $data['password']) {
        $resultado= $this->buscarEmailOUsuario( $data['email'] );
        if (!password_verify($_POST['password'], $resultado["password"])){
            $this->errores['password'] = "La contraseña no coincide con el email. Si nunca te registraste, hacelo <a href='registro.php'>aquí</a>.";

        } else {
          $_SESSION['nombre'] = $resultado['nombre'];
          $_SESSION['usuario'] = $resultado['usuario'];
          $_SESSION['apellido'] = $resultado['apellido'];
          $_SESSION['email'] = $resultado['email'];
          $_SESSION['avatar']['ruta'] = $resultado['rutaImagen'];
          if (isset ($_POST['recordarme'])){
              setcookie('email', $_POST['email'], time()+ 3600 * 24 * 7);
              header('location: index.php');
          } else {
              header('location: index.php');
          }
        }
    }

  }
}



 ?>
