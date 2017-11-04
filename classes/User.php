<?php
require_once('Conexion.php');
require_once('Validacion.php');
require_once('Login.php');
require_once('Register.php');


class User extends Conexion {
  use Validacion;
  use Login;
  use Register;

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

  public function buscarEmailOUsuario( $email ){
    $Sql = "SELECT * from users where email = :email || usuario = :email";

    $stmt = $this->getConexion()->prepare($Sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $resultados = $stmt->fetch( PDO::FETCH_ASSOC );
    return $resultados;
  }

  public function guardarImagen($ruta, $input, $nombreDeseado){
     if($_FILES[$input]['error'] == UPLOAD_ERR_OK){

        $nombre = $_FILES[$input]["name"];
        $archivo = $_FILES[$input]["tmp_name"];
        $ext = strtolower(pathinfo($nombre, PATHINFO_EXTENSION)); //hasta aca bien
        $miArchivo = $ruta;
        $miArchivo = $miArchivo . $nombreDeseado.'.'.$ext;


        move_uploaded_file($archivo, $miArchivo);
        return ['ruta' => $nombreDeseado.'.'.$ext];
     }
     return ['error' => $_FILES[$input]['error']];
  }

  public function editarDatos($data) {
    $sql = "UPDATE users SET nombre = :nombre, apellido = :apellido, email = :email";

    $stmt = $this->getConexion()->prepare( $sql );
    $stmt->bindParam(':nombre', $data['nombre']);
    $stmt->bindParam(':apellido', $data['apellido']);
    $stmt->bindParam(':email', $data['email']);
    // $stmt->bindParam(':usuario', $data['usuario']);
    // $stmt->bindValue(':password', password_hash($data['password'], PASSWORD_DEFAULT) );
    // $stmt->bindValue(':rutaImagen', $_POST['avatar']['ruta']);
    $stmt->execute();

    $_SESSION['nombre'] = $data['nombre'];
    $_SESSION['apellido'] = $data['apellido'];
    $_SESSION['email'] = $data['email'];
    // $_SESSION['usuario'] = $data['usuario'];
    // $_SESSION['avatar']['ruta'];

  }










}


 ?>
