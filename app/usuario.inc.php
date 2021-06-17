<?php

class usuario {

    private $id_usuario;
    private $nomusuario;
    private $email;
    private $fecha_registro;
    private $activo;
    private $clave;


    public function __construct($id_usuario, $nomusuario, $email, $fecha_registro, $activo, $clave){

        $this -> id_usuario = $id_usuario;
        $this -> nomusuario = $nomusuario;
        $this -> email = $email;
        $this -> fecha_registro = $fecha_registro;
        $this -> activo = $activo;
        $this -> clave = $clave;
    }

    public function obtenerid_usuario(){

        return $this -> id_usuario;
    }
    public function obtenernombre(){

        return $this -> nomusuario;
    }
    public function obtenerfecharegistro(){

        return $this -> fecha_registro;
    }
    public function obteneractivo(){

        return $this -> activo;
    }
    public function obtenerclave(){

        return $this -> clave;
    }

    public function cambiar_nombre($nomusuario){

        $this -> nomusuario = $nomusuario;
    }

    public function cambiar_email ($email){

        $this -> email = $email;

    }

    public function cambiar_password($clave){

        $this -> clave = $clave;

    }

    public function cambiar_activo($activo){

        $this -> activo = $activo;

    }

}

?>