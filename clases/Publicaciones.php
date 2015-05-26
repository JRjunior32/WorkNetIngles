<?php

require_once realpath(dirname(__FILE__) . '/./MySQL.php');
require_once realpath(dirname(__FILE__) . '/./Plantilla.php');
require_once realpath(dirname(__FILE__) . '/./Utilidades.php');
require_once realpath(dirname(__FILE__) . '/./Sesion.php');


class Publicaciones {
 

    public function guardarPub($datosPub) {        
        $bd = new MySQL();
        $utilidades = new Utilidades();
        $plantilla = new Plantilla();
        $sesion = new Sesion();
        
        $tabla = 'publicaciones';
        $columnas = 'Texto,imgPub,Fecha,cuenta_idCuenta,Usuario_cuenta';

        $FechaPub= date("Y").'-'.date("m").'-'.date("d") ;
        $Texto=$datosPub['texto'];
        $usuario = $sesion->obtenerVariableSesion('nombreUsuario');
        $id = $sesion->obtenerVariableSesion('idUsuario');        
        $img = "";

        $valores = '"'.$Texto.'","'
                    .$img.'","'
                    .$FechaPub.'","'
                    .$id.'","'
                    .$usuario.'"';
        
        $resultado = $bd->insertarRegistro($tabla, $columnas, $valores);        
        if (!$resultado)            
            $utilidades->mostrarMensaje('Sorry!, something is wrong please try again.');                            
    }
    
     public function mostrarPub() {
        $plantilla = new Plantilla();
        $mysql = new MySQL();
        $sesion = new Sesion();

         $query = 'SELECT idPub,Texto,ImgPub,Fecha,Usuario_cuenta FROM publicaciones ORDER BY idPub DESC';
        
        $resultado = $mysql->consulta($query);

        //print_r($resultado);
        $variables['publicaciones'] = $this->convertirPubHTML($resultado);
        
        $plantilla->verPagina('contenido-empre',$variables);
    }
    
    public function convertirPubHTML($Pub = array()){
        $db = new MySQL();
        $sesion = new Sesion();
        $id = $sesion->obtenerVariableSesion('idUsuario');

        $query = "SELECT imgCuenta FROM cuenta WHERE idCuenta=$id";
        $result = $db->consulta($query);
        
        $photo = $result[0]['imgCuenta'];
        
        $pub = '';        

        for ($i = 0; $i < count($Pub); $i++) {
            $pub.=  '<blockquote class="public">
                        <p><b>'.$Pub[$i]['Texto'].'</b></p>
                        <a href="#"><small>'.$Pub[$i]['Usuario_cuenta'].'</cite></small></a><img src="../fotos/'.$sesion->obtenerVariableSesion('nombreUsuario').'/'.$photo.'" class="img-circle" id="img-pub">
                        <small class="fechapub">'.$Pub[$i]['Fecha'].'</small>
                        <button type="button" class="btn btn-default" id="btn btn"><i class="fa fa-suitcase"></i> Work</button>
                        <button type="button" class="btn btn-default" id=""><span class="fui-cross"></span></i>Complaint </button>
                        <button type="button" class="btn btn-default" id=""><span class="fui-chat"></span></i> Comment</button>
                    </blockquote>';      
                }
        return $pub;

    }
}
