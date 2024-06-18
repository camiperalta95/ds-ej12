<?php

class Usuario{

    public $Id
    public $NombreUsuario
    public $Clave
    public $Email
    public $Nombre
    public $Apellido
    public $FechaNacimiento
    public $NroDocumento
    public $FechaAlta
     
    // mostrar datos 

    public function MostrarDatos(){
        echo 'Id: ' . $this->Id . '<br>';
        echo 'Nombre Usuario: ' . $this->NombreUsuario . '<br>';
        echo 'Clave: ' . $this->Clave . '<br>';
        echo 'Email: ' . $this->Email . '<br>';
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Apellido: ' . $this->Apellido . '<br>';
        echo 'Fecha de naciemiento: ' . $this->FechaNacimiento . '<br>';
        echo 'Numero de documento: ' . $this->NroDocumento . '<br>';
        echo 'Fecha de alta: ' . $this->FechaAlta . '<br>';
          

    }
}