<?php
require_once realpath(dirname(__FILE__) . '/./MySQL.php');
require_once realpath(dirname(__FILE__) . '/./Plantilla.php');
require_once realpath(dirname(__FILE__) . '/./Utilidades.php');


class Empresa {


    public function mostrarFormulario() {
        $plantilla = new Plantilla();
        $plantilla->verPaginaSinPlantilla('formularioEmpresa');
    }


    public function guardarEmpresa($datosEmpresa) {        
        $bd = new MySQL();
        $utilidades = new Utilidades();
        $plantilla = new Plantilla();
        $date=new DateTime();
        $dateNow = $date->format('Y-m-d');
        
        $tabla = 'cuenta';
        $columnas = 'Tipo,Usuario,Correo,Password,ImgCuenta,Empresa,Nombre,Apellido,FechaNac,DUI,Direc,Telefono,SitioWeb,Estado';

        $tipo = '2';
        $empresa = $datosEmpresa['empresa'];
        $user = $datosEmpresa['user'];
        $password = $datosEmpresa['password'];
        $repassword = $datosEmpresa['repassword'];
        $name = $datosEmpresa['name'];
        $ape = $datosEmpresa['ape'];
        $dui = $datosEmpresa['dui'];
        $birth = $datosEmpresa['birth'];
        $email = $datosEmpresa['email'];
        $remail = $datosEmpresa['remail'];
        $site = $datosEmpresa['site'];
        $adres = $datosEmpresa['adres'];
        $phone = $datosEmpresa['phone'];
        $estado = '1';
        $img = 'default.jpg';
        
        $valores = '"'.$tipo . '","' . $user . '","' . $email . '","' . $password . '","' . $img . '","' . $empresa . '","' . $name . '","' . $ape . '","' . $birth . '","' . $dui . '","' . $adres . '","' . $phone . '","' . $site . '","' . $estado.'"';

if($dateNow > $birth)
    if ($password == $repassword && $email == $remail)
        if($this->validarNombreUnico($user))
            $resultado = $bd->insertarRegistro($tabla, $columnas, $valores);
        else{
            $utilidades->mostrarMensaje('El nombre de usuario que ha ingresado ya se encuentra utilizado, por favor utilice uno diferente');
            $plantilla->verPaginaSinPlantilla('formularioEmpresa');
            return 0;
        }
    
         
        if (isset($resultado)){
            $utilidades->mostrarMensaje('El usuario ha sido agregado al sistema, espere que el administrador lo active');
            $plantilla->verPaginaSinPlantilla('index');
        }
        else{
            $utilidades->mostrarMensaje('El usuario no se ha podido agregar. \n Intente nuevamente');                    
         
        $plantilla->verPaginaSinPlantilla('formularioEmpresa');
        }
    }
        
    private function validarNombreUnico($nombreUsuario) {
        $db = new MySQL();
         
        $consulta = 'select idCuenta from cuenta where Usuario = "'. $nombreUsuario .'"';
        $resultado = $db->consulta($consulta);
        if(count($resultado) > 0)
            return false;
        else           
            return true;
         
    }
    public function VerEmpresas() {
        $plantilla = new Plantilla();
        $mysql = new MySQL();
        $sesion = new Sesion();
        $utilidades = new Utilidades();

        $idUsuario = $sesion->obtenerVariableSesion('idUsuario');

        $consulta = 'select idCuenta as id,Usuario,Nombre,Apellido,Empresa from cuenta '
                . ' where idCuenta not in( select idCuentaAmigo from Amigo where idCuenta =' . $idUsuario . ' ) AND Tipo = 2';
        $listaUsuarios = $mysql->consulta($consulta);
        $encabezado = array('ID', 'Usuario', 'Nombre', 'Apellido', 'Empresa');

        $acciones = '<a href="./agregarAmigo.php?idCuenta={{id}}"><i class="fa fa-user-plus"></i></a>';
        $acciones .= '<a href="./verPerfilAmigo.php?idCuenta={{id}}"> &nbsp Ver Perfil</a>';



        $variables['listaUsuarios'] = $utilidades->convertirTabla($listaUsuarios, $encabezado, $acciones);


        $sesion->agregarVariableSesion('permisoAgregarAmigo', '1');
        $plantilla->verPagina('listaPersonas', $variables);
    }
}
