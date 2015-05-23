<?php
require_once realpath(dirname(__FILE__) . '/./Utilidades.php');
require_once realpath(dirname(__FILE__) . '/./MySQL.php');
require_once realpath(dirname(__FILE__) . '/./Plantilla.php');

class Categoria {
    

    public function mostrarFormulario(){
        $plantilla = new Plantilla();
        $plantilla->verPagina('FormularioCategoria');
    }
    

    public function guardarcategoria($datosCategoria) {        
        $bd = new MySQL();
        $utilidades = new Utilidades();
        $plantilla = new Plantilla();
        
        $tabla = 'categorias';
        $columnas = 'NombreCat,cuenta_idCuenta';

        $cat = $datosCategoria['cat'];
        $idCuenta = 1;

        $valores = '"'.$cat.'","'.$idCuenta.'"'; 
            
         if($this->validarCategoriaUnica($cat)){
            $resultado = $bd->insertarRegistro($tabla, $columnas, $valores);
             $utilidades->mostrarMensaje('La categoria se agrego correctamente');
            $plantilla->verPagina('');
         }else{
            $utilidades->mostrarMensaje('Lo sentimos la categoria ya existe actualmente');
            $plantilla->verPagina('');
            return 0;
    }
}
 private function validarCategoriaUnica($Categoria) {
        $db = new MySQL();
         
        $consulta = 'select idCategorias from categorias where NombreCat = "'. $Categoria .'"';
        $resultado = $db->consulta($consulta);
        if(count($resultado) > 0)
            return false;
        else           
            return true;
         
    }
}