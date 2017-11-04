<?php

trait Register {
  public function registrarse ($data, $img) {

    //$_POST = $this->limpiarDatos($_POST);

    if( empty($data['email']) || !$this->validarEmail( $data['email'] ) ){
      $this->errores['email'] = 'El Email es inválido';
    }else if( $this->buscarEmail( $data['email'] ) ){
      $this->errores['email'] = 'El Email está repetido';
    }
    if(empty($data['usuario'])) {
      $this->errores['usuario'] = "Elije un nombre de usuario";
    } else if ($this->buscarUsuario($data['usuario'])){
      $errores['usuario'] = "Ese Alias ya fue tomado, por favor ingresa otro";
    }
    if(empty($data['nombre'])) {
      $this->errores['nombre'] = 'El nombre es requerido';
    }
    if(empty($data['apellido'])) {
      $this->errores['apellido'] = 'El apellido es requerido';
    }
    if (empty($data['password']) || !$this->validarPassword($data['password']) ){
      $this->errores['password'] = 'La contraseña debe tener como mínimo 6 digitos';
    } else if ($data['confirmar-pass'] !== $data['password']){
      $this->errores['confirmar-pass'] = 'Las contraseñas no coinciden';
    }

    if(!empty($img['avatar']['name'])){
        //$ruta = 'proyecto-dh-ultimo/img/';
        if (!$this->validarAvatarSize($img) || !$this->validarAvatarExt($img)) {
          $this->errores['avatar'] = 'La imagen debe pesar menos de 4mb <br> y su formato debe ser jpg, jpeg, gif, svg o png';

        } else {
          $ruta = dirname(__FILE__).'/img/';
          if(!file_exists($ruta)){
            mkdir($ruta, 0777);
          };
           $_POST['avatar'] = $this-> guardarImagen($ruta, 'avatar', md5($_FILES['avatar']['name']).time());
        }

    }

    if( count($this->errores)==0 ){
      $sql = "INSERT INTO users ( nombre, apellido, email, usuario, password, rutaImagen)
              VALUES (:nombre, :apellido, :email, :usuario, :password, :rutaImagen)";

      $stmt = $this->getConexion()->prepare( $sql );
      $stmt->bindParam(':nombre', $data['nombre']);
      $stmt->bindParam(':apellido', $data['apellido']);
      $stmt->bindParam(':email', $data['email']);
      $stmt->bindParam(':usuario', $data['usuario']);
      $stmt->bindValue(':password', password_hash($data['password'], PASSWORD_DEFAULT) );
      $stmt->bindValue(':rutaImagen', $_POST['avatar']['ruta']);
      $stmt->execute();

      $_SESSION['nombre'] = $data['nombre'];
      $_SESSION['apellido'] = $data['apellido'];
      $_SESSION['email'] = $data['email'];
      $_SESSION['usuario'] = $data['usuario'];
      $_SESSION['avatar']['ruta'];

      header('location:index.php');
    }
  }
}

 ?>
