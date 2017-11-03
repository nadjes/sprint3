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

  public function validarAvatar(){

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
