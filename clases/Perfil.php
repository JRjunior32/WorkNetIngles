<?php

require_once realpath(dirname(__FILE__) . '/./MySQL.php');
require_once realpath(dirname(__FILE__) . '/./Plantilla.php');
require_once realpath(dirname(__FILE__) . '/./Utilidades.php');
require_once realpath(dirname(__FILE__) . '/./Sesion.php');


class Perfil {
    var $rutaServidor='C:\\xampp\\htdocs\\WorkNet\\fotos\\';

    public function mostrarPerfil() {
        $plantilla = new Plantilla();
        $mysql = new MySQL();
        $sesion = new Sesion();

        $consulta = ' select c.ImgCuenta, c.SitioWeb,c.Empresa, c.idCuenta, c.tipo, c.usuario, c.correo from cuenta c where c.idCuenta = ' . $sesion->obtenerVariableSesion('idUsuario');        
        
        $resultado = $mysql->consulta($consulta);

        //print_r($resultado);
        $variables['Id'] = $resultado[0]['idCuenta'];
        $variables['Tipo'] = $resultado[0]['tipo'];
        $variables['Usuario'] = $resultado[0]['usuario'];
        $variables['Correo'] = $resultado[0]['correo'];
        $variables['Empresa'] = $resultado[0]['Empresa'];
        $variables['Web'] = $resultado[0]['SitioWeb'];
        $variables['photo'] = '../fotos/'.$resultado[0]['usuario'].'\\'.$resultado[0]['ImgCuenta'];
        
        
        $plantilla->verPagina('perfilEmpresa',$variables);
    }
    
        public function crearDirectorio($nombreDirectorio='prueba'){
        if(!is_dir($this->rutaServidor.$nombreDirectorio)){        
            mkdir($this->rutaServidor.$nombreDirectorio, 0777);
        }
    }

     public function subirFoto($archivo){
                $bd = new MySQL();
                $sesion = new Sesion();
                $utilidades= new Utilidades();
                $plantilla = new Plantilla();
                $id = $sesion->obtenerVariableSesion('idUsuario');
                $carpeta=$sesion->obtenerVariableSesion('nombreUsuario');
        
                $foto = str_replace(' ','_',$archivo['file']['name']);
         
                $tabla = 'cuenta';
                $cambio =' ImgCuenta="'.$foto.'"';
                $where = ' idCuenta="'.$id.'"';
         
                $resultado = $bd->modificarRegistro($tabla, $cambio, $where);
                
                $utilidades-> mostrarMensaje('El archivo se cargo exitosamente');
                
                if ($archivo['file']['error']>0){
                    $utilidades->mostrarMensaje('Ocurrio un problema al momento de subir el archivo');
                    $plantilla->verPagina('perfil_Mostrar');
                }else{
                    $this->crearDirectorio($carpeta);
                    //echo $this->rutaServidor.$carpeta."\\";
                    move_uploaded_file(str_replace(' ',':_',$archivo['file']['tmp_name']),$this->rutaServidor.$carpeta."\\".$foto);
                    
                    $utilidades->Redireccionar('controladores/perfil_Mostrar.php');
                }
            }
    public function verPerfilAmigo($id){
        $plantilla = new Plantilla();
        $mysql = new MySQL();
        $sesion = new Sesion();

        $consulta = ' select c.ImgCuenta, c.SitioWeb,c.Empresa, c.idCuenta, c.tipo, c.usuario, c.correo from cuenta c where c.idCuenta = ' . $id;        
        
        $resultado = $mysql->consulta($consulta);

        //print_r($resultado);
        $variables['Id'] = $resultado[0]['idCuenta'];
        $variables['Tipo'] = $resultado[0]['tipo'];
        $variables['Usuario'] = $resultado[0]['usuario'];
        $variables['Correo'] = $resultado[0]['correo'];
        $variables['Empresa'] = $resultado[0]['Empresa'];
        $variables['Web'] = $resultado[0]['SitioWeb'];
        $variables['photo'] = '../fotos/'.$resultado[0]['usuario'].'\\'.$resultado[0]['ImgCuenta'];
        
        
        $plantilla->verPagina('perfilEmpresaV',$variables);
        
    }
        public function mostrarPerfilUsuario() {
        $plantilla = new Plantilla();
        $mysql = new MySQL();
        $sesion = new Sesion();

        $consulta = ' select c.ImgCuenta, c.Nombre,c.Apellido, c.idCuenta, c.tipo, c.usuario, c.correo, c.apellido,c.dui from cuenta c where c.idCuenta = ' . $sesion->obtenerVariableSesion('idUsuario');        
        
        $resultado = $mysql->consulta($consulta);

        //print_r($resultado);
        $variables['Id'] = $resultado[0]['idCuenta'];
        $variables['DUI'] = $resultado[0]['dui'];
        $variables['Usuario'] = $resultado[0]['usuario'];
        $variables['Nombre'] = $resultado[0]['Nombre'];
        $variables['Apellido'] = $resultado[0]['Apellido'];
        $variables['Correo'] = $resultado[0]['correo'];
        $variables['photo'] = '../fotos/'.$resultado[0]['usuario'].'\\'.$resultado[0]['ImgCuenta'];
        
        
        $plantilla->verPagina('perfilUsuario',$variables);
    }
         public function subirFotoUsuario($archivo){
                $bd = new MySQL();
                $sesion = new Sesion();
                $utilidades= new Utilidades();
                $plantilla = new Plantilla();
                $id = $sesion->obtenerVariableSesion('idUsuario');
                $carpeta=$sesion->obtenerVariableSesion('nombreUsuario');
        
                $foto = str_replace(' ','_',$archivo['file']['name']);
         
                $tabla = 'cuenta';
                $cambio =' ImgCuenta="'.$foto.'"';
                $where = ' idCuenta="'.$id.'"';
         
                $resultado = $bd->modificarRegistro($tabla, $cambio, $where);
                
                $utilidades-> mostrarMensaje('El archivo se cargo exitosamente');
                
                if ($archivo['file']['error']>0){
                    $utilidades->mostrarMensaje('Ocurrio un problema al momento de subir el archivo');
                    $plantilla->verPagina('perfil_Mostrar');
                }else{
                    $this->crearDirectorio($carpeta);
                    //echo $this->rutaServidor.$carpeta."\\";
                    move_uploaded_file(str_replace(' ',':_',$archivo['file']['tmp_name']),$this->rutaServidor.$carpeta."\\".$foto);
                    
                    $utilidades->Redireccionar('controladores/verPerfilUsuario.php');
                }
            }
}
