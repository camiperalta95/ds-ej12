<?php

require_once 'modelo/usuario.php';

$Usuario= New Usuario();

$Usuario->Id= '45';
$Usuario->NombreUsuario= 'Camilagp';
$Usuario->Clave= '15656';
$Usuario->Email= 'camila@gmail.com';
$Usuario->Nombre= 'Camila';
$Usuario->Apellido= 'Peralta';
$Usuario->FechaNacimiento= '30/10/1995';
$Usuario->NroDocumento= '21656561';
$Usuario->FechaAlta= '12/1/22';



$Usuario->MostrarDatos();


 
