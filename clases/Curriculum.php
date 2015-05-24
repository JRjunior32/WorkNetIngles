<?php
require_once realpath(dirname(__FILE__) . '/./Utilidades.php');
require_once realpath(dirname(__FILE__) . '/./MySQL.php');
require_once realpath(dirname(__FILE__) . '/./Plantilla.php');

class Curriculum {
    public function mostrarFormulario(){
        $plantilla = new Plantilla();
         
        $plantilla->verPagina('fromCurriculum');
    }
    
    public function crearCurriculum($datos){
        $db = new MySQL();
        $sesion = new Sesion();
        $plantilla = new Plantilla();
        $utilidades = new Utilidades();
        
        $tabla = 'curriculum';
        
        $nombre = $datos['name'];
        $tel = $datos['tel'];
        $cel = $datos['cel'];
        $dic = $datos['dic'];
        $academica = $datos['academica'];
        $ex = $datos['ex'];
        $ref1 = $datos['ref1'];
        $ref2 = $datos['ref2'];
        $ref3 = $datos['ref3'];
        $tel1 = $datos['tel1'];
        $tel2 = $datos['tel2'];
        $tel3 = $datos['tel3'];
        
        $id = $sesion->obtenerVariableSesion('idUsuario');
        
        $columnas='Nomble_Completo,Telefono,Celular,direccion,FormacionAc,Experiencia,Referencia1,TelRef1,Referencia2,TelRef2,Referencia3,TelRef3,idCuenta_Cuenta';
        
        $valores = '"'.$nombre.'","'
                    .$tel.'","'
                    .$cel.'","'
                    .$dic.'","'
                    .$academica.'","'
                    .$ex.'","'
                    .$ref1.'","'
                    .$tel1.'","'
                    .$ref2.'","'
                    .$tel2.'","'
                    .$ref3.'","'
                    .$tel3.'","'
                    .$id.'"'; 
        
        $result = $db->insertarRegistro($tabla, $columnas, $valores);
        
        if($result)
            $utilidades->mostrarMensaje("Su curriculum se creo exitosamente");
        else
            $utilidades->mostrarMensaje("Ocurrio un error, vuela a intentar");
    }
}