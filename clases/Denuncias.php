    <?php

    require_once realpath(dirname(__FILE__) . '/./MySQL.php');
    require_once realpath(dirname(__FILE__) . '/./Plantilla.php');
    require_once realpath(dirname(__FILE__) . '/./Utilidades.php');
    require_once realpath(dirname(__FILE__) . '/./Sesion.php');


    class Denuncias {
        public function guardarQueja($d){
            $db = new MySQL();
            $sesion = new Sesion();
            $utilidades = new Utilidades();

            $razon = $d['razon'];
            $idcuenta = $sesion->obtenerVariableSesion('idUsuario');
            $idPub = $d['id'];
            $tabla = 'denuncias';
            $columnas = 'Motivo,UserEmpresa,cuenta_idCuenta';
            $valores = '"'.$razon.'","'
                          .$idPub.'","'
                          .$idcuenta.'"';
            $resultado = $db -> insertarRegistro($tabla,$columnas,$valores);
            if($resultado){
                $utilidades->mostrarMensaje('Thanks for your colaboration. Together we are going to make WorkNet a better place.');
            }
                    $utilidades->Redireccionar('controladores/publicar.php');

        }
        
        public function mostrarQuejas(){
            $plantilla = new Plantilla();
            $mysql = new MySQL();
            $sesion = new Sesion();
            $utilidades = new Utilidades();


            $consulta ='SELECT idDenuncias as id,Motivo,UserEmpresa,cuenta_idCuenta,FechaRealizada  FROM denuncias';
            $listaDenuncia = $mysql->consulta($consulta);
            $encabezado = array('ID', 'Reason', 'ID New Feed', 'ID User', 'Date');
            $acciones = '<center> <a href="./mostrarPubComAdmin.php?idPub='.$listaDenuncia[0]['UserEmpresa'].'" class="btn btn-info" id="acciones"> <i class="fa fa-newspaper-o"></i></a>';

            $variables['listaDenuncias'] = $utilidades->convertirTabla($listaDenuncia, $encabezado,$acciones);

            $plantilla->verPagina('listaDenuncias', $variables);
        }

    }