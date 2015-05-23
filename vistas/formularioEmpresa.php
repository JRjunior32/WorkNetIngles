<!DOCTYPE>
<html>
    <head>
        <title>Registrar</title>
        <meta charset="utf-8">
        <link href="../vistas/recursos/css/bootstrap.css" rel="stylesheet">
        <link href="../vistas/recursos/css/flat-ui.css" rel="stylesheet">
        <link href="../style.css" rel="stylesheet">
    </head>
    <body class="fondi">
        <div class="login-form">
            <center><h3>Regístrese</h3></center>                   
            <form action="../controladores/guardarEmpresa.php" method="POST">
                <div class='form-group'>     
                    <label for="Empresa">Empresa:</label><br>
                    <input type='text' class='form-control login-field' id="letras" onkeydown="return validarLetras(event)" name='empresa' placeholder='Empresa' required /><br>
                    </div>
                    <div class='form-group'> 
                    <label for="Usuario">Usuario:</label><br>
                    <input type='text' class='form-control login-field' name='user' placeholder='Usuario' required /><br>
                    </div>
                    <div class='form-group'> 
                    <label for="Contraseña">Contraseña:</label><br>
                    <input type='password' minlength="5" id="pass" class='form-control login-field' name='password' placeholder='Contraseña' required  /><br>
                    <label for="Repita Contraseña">Repita Contraseña:</label><br>
                    <input type='password' id="repass" class='form-control login-field' name='repassword' placeholder='Confirmar Contraseña' required  /><br>
                    <div id="val"></div>
                    </div>
                    <label for="Nombre">Nombre:</label><br>
                    <input type='text' class='form-control login-field' id="letras" onkeydown="return validarLetras(event)" name='name' placeholder='Nombre'  required /><br>
                    <label for="Apellido">Apellido:</label><br>
                    <input type='text' class='form-control login-field' id="letras" onkeydown="return validarLetras(event)" name='ape' placeholder='Apellido' required /><br>
                    <label for="DUI">DUI:</label><br>
                    <input type='text' maxlength="10"id="num" onkeydown="return validarNumeros(event)" class='form-control login-field' name='dui' placeholder='DUI' required /><br>
                    <label for="FechaNacimiento"> Fecha de fundación (dd/mm/aaaa):</label><br>
                    <input type='date' class='form-control login-field' name='birth' placeholder='Fecha de nacimiento' required /><br>
                    <label for="email">Correo electrónico:</label><br>
                    <div class='form-group'> 
                    <input type='email' id="email" class='form-control login-field' name='email' placeholder='Correo Electronico' required /><br>
                    <label for="email2">Confirma correo:</label><br>
                    <input type='email' id="remail" class='form-control login-field' name='remail' placeholder='Confirmar Correo Electronico' required  /><br>
                    <div id="val2"></div>
                    </div>
                    <label for="web">Sitio Web:</label><br>
                    <input type='url' class='form-control login-field' name='site' placeholder='Sitio Web(Opcional)' /><br>
                    <label for="Dirección">Dirección:</label><br>
                    <input type='text' class='form-control login-field' name='adres' placeholder='Dirección' required  /><br>
                    <label for="Telefono">Teléfono:</label><br>
                    <input type='tel' maxlength="9" id="num" onkeydown="return validarNumeros(event)" class='form-control login-field' name='phone' placeholder='Numero de Telefono'required  /><br>
                    <p class="text-center">
                    <input type='submit' value='Registrarse' class='btn btn-primary btn-lg btn-warning'>
                    <a href='../controladores/index.php'><input type='button' value='Regresar' class='btn btn-primary btn-lg btn-danger'></a>
                    </p>
                </div>
            </form>
        </div>
        <script src="../vistas/recursos/js/jquery.min.js"></script>    
        <script src="../vistas/recursos/js/flat-ui.min.js"></script>    
    <script>
    $(document).ready(function(){
        $("#pass,#repass").keyup(function(){
            var pass=$("#pass").val();
            var repass=$("#repass").val();
            
                if(pass != repass){
                    $("#val").parent().addClass("has-error");
                    $("#val").parent().removeClass("has-success");
                }else if(pass == "" || repass == ""){
                    $("#val").parent().removeClass("has-success has-error");
                    $("#val").text("");
                }else{
                    $("#val").parent().addClass("has-success");
                    $("#val").parent().removeClass("has-error");

                }
        });
        $("#mail,#remail").keyup(function(){
            var email=$("#email").val();
            var remail=$("#remail").val();
            
                if(email != remail){
                    $("#val2").parent().addClass("has-error");
                    $("#val2").parent().removeClass("has-success");
                }else if(email == "" || remail == ""){
                    $("#val2").parent().removeClass("has-success has-error");
                    $("#val2").text("");
                }else{
                    $("#val2").parent().addClass("has-success");
                    $("#val2").parent().removeClass("has-error");

                }
        });
    }); 
    
    </script>
    <script type="text/javascript">
	function validarNumeros(e) { // 1
		tecla = (document.all) ? e.keyCode : e.which; // 2
		if (tecla==8) return true; // backspace
		if (tecla==109) return true; // menos
    if (tecla==110) return true; // punto
		if (tecla==189) return true; // guion
		if (e.ctrlKey && tecla==88) { return true}; //Ctrl x
		if (tecla>=96 && tecla<=105) { return true;} //numpad
 
		patron = /[0-9]/; // patron
 
		te = String.fromCharCode(tecla); 
		return patron.test(te); // prueba
	}
</script>
<script type="text/javascript">
  function validarLetras(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; 
    if (tecla==8) return true; // backspace
		if (tecla==32) return true; // espacio
		if (e.ctrlKey && tecla==67) { return true;} //Ctrl c
		if (e.ctrlKey && tecla==88) { return true;} //Ctrl x
 
		patron = /[a-zA-Z]/; //patron
 
		te = String.fromCharCode(tecla); 
		return patron.test(te); // prueba de patron
	}	
</script>
