<?php
require_once('User.php');
require_once('Validacion.php');

Class UserJson extends User{
use Validacion;

   public function __construct(){
      parent::__construct();
   }

   public function guardarUsuariosJson(){
      $errorJson;
      $archivo = $this->prepararJson();
      if (count($archivo) > 0) {

         foreach ($archivo as $user) {
            $userArray = json_decode($user, true);
            $existe = $this->buscarEmail($userArray['email']);
            if ($existe['email'] == $userArray['email']) {
               $errorJson = "El usuario ". $userArray['email'] .  " ya existe en la db";
               return $errorJson."<br>";
            }else {
               $this->guardar($userArray);
            }
         }
      }
   }

   private function prepararJson(){

      $usuariosJSON = [];
      //paso todo el archivo json para manipularlo despues
      $usuariosJSON = file_get_contents("usuarios.json");

      //divido el archivo en lineas para contarlas
      $usuariosJSON = explode("\n", $usuariosJSON);

      //cuento la cantidad de lineas
      $cantidadUsuarios = count($usuariosJSON);

      //borro la ultima linea que esta vacia y retorno
      $lineaVacia = ($cantidadUsuarios - 1);
      unset($usuariosJSON[$lineaVacia]);

      return $usuariosJSON;

   }



   private function guardar($datos){
      $sql = "INSERT INTO users ( nombre, apellido, email, password, usuario, rutaImagen)
              VALUES (:nombre, :apellido, :email, :password, :usuario, :rutaImagen) ";

      $stmt = $this->getConexion()->prepare( $sql );
      $stmt->bindParam(':nombre', $datos['nombre']);
      $stmt->bindParam(':apellido', $datos['apellido']);
      $stmt->bindParam(':email', $datos['email']);
      $stmt->bindParam(':usuario', $datos['usuario']);
      $stmt->bindValue(':password', $datos['password']);
      $stmt->bindValue(':rutaImagen', $datos['avatar']['ruta']);
      $stmt->execute();
   }
}


?>
