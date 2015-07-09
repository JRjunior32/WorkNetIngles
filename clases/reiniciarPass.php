 <?php

    require_once realpath(dirname(__FILE__) . '/./MySQL.php');
    require_once realpath(dirname(__FILE__) . '/./Plantilla.php');
    require_once realpath(dirname(__FILE__) . '/./Utilidades.php');
    require_once realpath(dirname(__FILE__) . '/./Sesion.php');


    class reiniciarPass {

        public function mostrarForm(){
        $plantilla = new Plantilla();

        $plantilla->verPaginaSinPlantilla('olvido');
        }

        function generarLinkTemporal($olvido){
           $db = new MySQL();

            $cadena = rand(1,9999999).date('Y-m-d');
            $token = sha1($cadena);

            $email = $olvido['email'];
            $tabla = 'cuenta';
            $cambio = 'token ="'.$token."'";
            $where = 'Correo = "'.$email."'";

           $resultado = $db->modificarRegistro($tabla,$cambio,$where);
           if($resultado){
              // Se devuelve el link que se enviara al usuario
              $enlace = $_SERVER["SERVER_NAME"].'/pass/restablecer.php?idusuario='.sha1($idusuario).'&token='.$token;
              return $enlace;
           }
           else
              return FALSE;
        }

    function enviarEmail( $email, $link ){
       $mensaje = '<html>
         <head>
            <title>Respawn your password</title>
         </head>
         <body>
           <p>We have received a petition to recover your password.</p>
           <p>If you made this petition, click the following link. If you did not made this petition, please ignore this e-mail.</p>
           <p>
             <strong>Link to recover your password.</strong><br>
             <a href="'.$link.'"> Recover your password</a>
           </p>
         </body>
        </html>';

       $cabeceras = 'MIME-Version: 1.0' . "\r\n";
       $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
       $cabeceras .= 'From: Codedrinks <mimail@codedrinks.com>' . "\r\n";
       // Se envia el correo al usuario
       mail($email, "Recuperar contraseña", $mensaje, $cabeceras);
    }
}
