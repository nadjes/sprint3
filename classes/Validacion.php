<?php

trait Validacion {
  protected $errores= [];

  public function getErrores() {
    return $this->errores;
  }

  public function validarEmail($data){
    return filter_var($data, FILTER_VALIDATE_EMAIL);
  }

  public function validarPassword($data){
    return strlen($data) > 5;
  }

  public function validarAvatarSize($img){
    return $img['avatar']['size'] < 5000000;
  }

  public function validarAvatarExt($img) {
    $nombre = $img['avatar']['name'];
    $ext = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));
    $extPermitidas= ['jpeg', 'jpg', 'png', 'svg', 'gif'];
    if(in_array($ext, $extPermitidas)) {
      return true;
    } return false;
  }

  public function limpiarDatos($datos){
     //si hay espacion delante de los campos, los elimina con la funcion trim()
    foreach ($datos as $key => $value) {
        $limpios[$key] = trim($value);
    }
    return $limpios;
  }

}

 ?>
