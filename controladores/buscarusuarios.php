<?php

require_once realpath(dirname(__FILE__) . '/../clases/AdministrarUsuarios.php');
require_once realpath(dirname(__FILE__) . '/../clases/Usuario.php');


$administrarUsuario = new AdministrarUsuarios();

$usuariosPermitidos = array('2','3','4');
$administrarUsuario->verificarSesion($usuariosPermitidos);

$usuario = new Usuario();
$usuario->VerUsuarios();
