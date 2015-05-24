<?php

class Amigos {

    public function VerPersonas() {
        $plantilla = new Plantilla();
        $mysql = new MySQL();
        $sesion = new Sesion();
        $utilidades = new Utilidades();

        $idUsuario = $sesion->obtenerVariableSesion('idUsuario');

        $consulta = 'select idCuenta as id,Usuario,Nombre,Apellido,Empresa from cuenta '
                . ' where idCuenta not in( select idCuentaAmigo from Amigo where idCuenta =' . $idUsuario . ' )';
        $listaUsuarios = $mysql->consulta($consulta);
        $encabezado = array('ID', 'Usuario', 'Nombre', 'Apellido', 'Empresa');

        $acciones = '<a href="./agregarAmigo.php?idCuenta={{id}}"><i class="fa fa-user-plus"></i></a>';
        $acciones .= '<a href="./verPerfilAmigo.php?idCuenta={{id}}"> &nbsp Ver Perfil</a>';



        $variables['listaUsuarios'] = $utilidades->convertirTabla($listaUsuarios, $encabezado, $acciones);


        $sesion->agregarVariableSesion('permisoAgregarAmigo', '1');
        $plantilla->verPagina('listaPersonas', $variables);
    }


    public function agregarAmigo($id) {
        $tabla = 'Amigo';
        $columnas = 'idCuenta,idCuentaAmigo';

        $mysql = new MySQL();
        $sesion = new Sesion();
        $plantilla = new Plantilla();
        $utilidades = new Utilidades();

        if ($sesion->existeVariableSesion('permisoAgregarAmigo')) {
            $sesion->eliminarVariableSesion('permisoAgregarAmigo');
            if ($sesion->existeVariableSesion('idUsuario')) {
                $valores = $sesion->obtenerVariableSesion('idUsuario') . ',' . $id;
                $resultado = $mysql->insertarRegistro($tabla, $columnas, $valores);
                if ($resultado)
                    $utilidades->mostrarMensaje('El usuario se ha agregado a su lista de amigos');
                else
                    $utilidades->mostrarMensaje('El usuario no se ha agregado a su lista de amigos. \n Intente nuevamente');
            }
        }
        $plantilla->verPagina();
    }

  
    public function VerAmigos() {
        $plantilla = new Plantilla();
        $mysql = new MySQL();
        $sesion = new Sesion();
        $utilidades = new Utilidades();

        $idUsuario = $sesion->obtenerVariableSesion('idUsuario');

        $consulta = 'select c.idCuenta as id, c.Usuario, c.Nombre,c.Apellido '
                    .' from cuenta c, Amigo a '
                    .' where a.idCuentaAmigo = c.idCuenta '
                    .' and a.idCuenta = ' . $idUsuario;
        
        $listaAmigos = $mysql->consulta($consulta);
        
        $encabezado = array('ID', 'Usuario', 'Nombre', 'Apellido');

        $acciones = '<a href="./chatear.php?idCuenta={{id}}"><span class="fui-chat"> </span></a>';
        $acciones .= '<a href="./eliminarAmigo.php?idCuenta={{id}}" id="textRed"><span class="fui-trash"></span></a>';
        $acciones .= '<a href="./perfil_Mostrar.php">&nbsp Ver Perfil</a>';

     
        $variables['listaAmigos'] = $utilidades->convertirTabla($listaAmigos, $encabezado, $acciones);

             
        $plantilla->verPagina('listaAmigos', $variables);
    }
    public function eliminarAmigo($id){
        $db = new MySQL();
        $sesion = new Sesion();
        $utilidades = new Utilidades();
        
        $tabla = 'amigo';
        $where = 'idCuentaAmigo ='.$id;
        
        $resultado = $db->eliminarRegistro($tabla, $where);
        
        if($resultado){
            $utilidades->mostrarMensaje('El usuario se ha eliminado de su lista de amigos');
            $utilidades->redireccionar('controladores/mensajes.php');
        }else
            $utilidades->mostrarMensaje('Lo siento, Ocurrio un error, intenta de nuevo');

        
    }

}
