<?php
require_once('Conexion.php');
require_once('Validacion.php');

class User extends Conexion {
  use Validacion;

  public function __construct(){
    parent::__construct();
  }


  public function buscarEmail( $email ){
    $Sql = "SELECT * from users where email = :email";

    $stmt = $this->getConexion()->prepare($Sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $resultados = $stmt->fetch( PDO::FETCH_ASSOC );
    return $resultados;
  }

  public function buscarUsuario( $usuario ){
    $Sql = "SELECT * from users where usuario = :usuario";

    $stmt = $this->getConexion()->prepare( $Sql );
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();

    $resultados = $stmt->fetch( PDO::FETCH_ASSOC );
    return $resultados;
  }

  public function registrarse ($data) {

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

    if( count($this->errores)==0 ){
      $sql = "INSERT INTO users ( nombre, apellido, email, usuario, password)
              VALUES (:nombre, :apellido, :email, :usuario, :password) ";

      $stmt = $this->getConexion()->prepare( $sql );
      $stmt->bindParam(':nombre', $data['nombre']);
      $stmt->bindParam(':apellido', $data['apellido']);
      $stmt->bindParam(':email', $data['email']);
      $stmt->bindParam(':usuario', $data['usuario']);
      $stmt->bindValue(':password', password_hash($data['password'], PASSWORD_DEFAULT) );
      $stmt->execute();

      $_SESSION['nombre'] = $data['nombre'];
      $_SESSION['apellido'] = $data['apellido'];
      $_SESSION['email'] = $data['email'];
      $_SESSION['usuario'] = $data['usuario'];

      header('location:index.php');
    }
  }
}

 ?>
