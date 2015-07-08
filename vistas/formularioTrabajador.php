<div class="panel panel-primary">
    <div class="panel-heading">        
        <h3 class="panel-title"><p class="text-center">Register Worker</p></h3>        
    </div>
    <div class="panel-body">
        <form action="../controladores/guardartrabajador.php" method="POST">    
            <div class="form-group">
                <label for="Usuario">User:</label>
                <input type="text" class="form-control login-field" id="usuario" name="user" placeholder="User" required />
            </div>
            <div class="form-group">
                <label for="CorreoElectronico">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Email" required />
            </div>
            <div class="form-group">
                <label for="Contraseña">Password:</label>
                <input type="password" minlength="5" class="form-control login-field" id="pass" name="pass" placeholder="Password" required />
                <label for="RepitaContraseña">Confirm Password:</label>
                <input type="password" class="form-control login-field" id="repass" name="repass" placeholder="Confirm Password" required />
                <div id="val"></div>
            </div>
            <div class="form-group">
                <label for="Nombre">Name:</label>
                <input type="text" class="form-control login-field" id="letras" onkeydown="return validarLetras(event)" name="name" placeholder="Name" required />
            </div>
            <div class="form-group">
                <label for="Apellido">Surname:</label>
                <input type="text" class="form-control login-field" id="letras" onkeydown="return validarLetras(event)" name="ape" placeholder="Surname" required />
            </div>
            <div class="form-group">
                <label for="FechaNacimiento">Date of Birth (month/day/year):</label>
                <input type="date" min="31/12/1996" class="form-control login-field" name="birth" placeholder="Fecha de nacimiento" required />
            </div>
            <div class="form-group">
                <label for="DUI">DUI:</label>
                <input type="text" maxlength="10" class="form-control login-field" id="num" onkeydown="return validarNumeros(event)" name="dui" placeholder="DUI" required />
            </div>
            <div class="form-group">
                <p class="text-center">
                <input type="submit" id="btn" value="Registrar" class="btn btn-primary btn-lg btn-warning">                

                </p>  
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#pass,#repass").keyup(function(){
            var pass=$("#pass").val();
            var repass=$("#repass").val();
            
                if(pass != repass){
                    $("#val").parent().addClass("has-error");
                    $("#val").parent().removeClass("has-success");
                    $("#btn").parent().addClass("disabled");

                }else if(pass == "" || repass == ""){
                    $("#val").parent().removeClass("has-success has-error");
                    $("#val").text("");
                }else{
                    $("#val").parent().addClass("has-success");
                    $("#val").parent().removeClass("has-error");

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

