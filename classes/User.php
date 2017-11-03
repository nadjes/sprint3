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

    if(!empty($_FILES['avatar']['name'])){
        //$ruta = 'proyecto-dh-ultimo/img/';
       $ruta = dirname(__FILE__).'/img/';
       if(!file_exists($ruta)){
         mkdir($ruta, 0777);
       };

       $_POST['avatar'] = $this-> guardarImagen($ruta, 'avatar', md5($_FILES['avatar']['name']).time());

       //var_dump($_POST['avatar']);
       //die();

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

      header('location:index.php');
    }
  }

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
