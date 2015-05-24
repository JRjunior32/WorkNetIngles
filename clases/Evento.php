<?php

require_once realpath(dirname(__FILE__) . '/./MySQL.php');
require_once realpath(dirname(__FILE__) . '/./Plantilla.php');
require_once realpath(dirname(__FILE__) . '/./Utilidades.php');


class Evento {


    public function mostrarFormulario() {
        $plantilla = new Plantilla();
        $plantilla->verPagina('formularioEventos');
    }
     public function guardarEvento($datosEvento) {        
        $bd = new MySQL();
        $utilidades = new Utilidades();
        $plantilla = new Plantilla();
        $dateNow = new DateTime();
        $date = $dateNow->format('Y-m-d');
        
        
        $tabla = 'eventos';
        $columnas = 'idCuenta,FechaIni,FechaFin,Nombre,Descripcion';

        $FechaIni=$datosEvento['empieza'];
        $FechaFin=$datosEvento['termina'];
        $Nombre=$datosEvento['nombre'];
        $Descripcion=$datosEvento['descripcion'];
        $idCuenta=1;
        
        $valores = '"'.$idCuenta. '","' . 
                    $FechaIni. '","' . 
                    $FechaFin. '","' . 
                    $Nombre . '","'.
                    $Descripcion.'"';
    
    if ($date <= $FechaIni){
        if($FechaIni <= $FechaFin){
            $resultado = $bd->insertarRegistro($tabla, $columnas, $valores);
        }else{
            $utilidades->mostrarMensaje('El evento no puede terminar antes que Empieze ');
        }
            }else{
                    $utilidades->mostrarMensaje('El evento no puede inciar si la fecha ya ha pasado');
            }
         
        if (isset($resultado))
            $utilidades->mostrarMensaje('El evento ha sido guardado');
        else
            $utilidades->mostrarMensaje('No se pudo crear evento');                    
        
        $plantilla->verPagina();
  }
}
