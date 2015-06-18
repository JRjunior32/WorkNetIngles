<!DOCTYPE>
<html>
    <head>
        <title>Sign Up</title>
        <meta charset="utf-8">
        <link href="../vistas/recursos/css/bootstrap.css" rel="stylesheet">
        <link href="../vistas/recursos/css/flat-ui.css" rel="stylesheet">
        <link href="../style.css" rel="stylesheet">
    </head>
    <body class="fondi">
        <div class="login-form">
            <center><h3>Sign Up</h3></center>                   
            <form action="../controladores/guardarEmpresa.php" method="POST">
                <div class='form-group'>     
                    <label for="Empresa">Enterprise:</label><br>
                    <input type='text' class='form-control login-field' id="letras" onkeydown="return validarLetras(event)" name='empresa' placeholder='Enterprise' required /><br>
                    </div>
                    <div class='form-group'> 
                    <label for="Usuario">User:</label><br>
                    <input type='text' class='form-control login-field' name='user' placeholder='User' required /><br>
                    </div>
                    <div class='form-group'> 
                    <label for="Contraseña">Password:</label><br>
                    <input type='password' minlength="5" id="pass" class='form-control login-field' name='password' placeholder='Password' required  /><br>
                    <label for="Repita Contraseña">Confirm Password:</label><br>
                    <input type='password' id="repass" class='form-control login-field' name='repassword' placeholder='Confirm Password' required  /><br>
                    <div id="val"></div>
                    </div>
                    <label for="Nombre">Name:</label><br>
                    <input type='text' class='form-control login-field' id="letras" onkeydown="return validarLetras(event)" name='name' placeholder='Name'  required /><br>
                    <label for="Apellido">Surname:</label><br>
                    <input type='text' class='form-control login-field' id="letras" onkeydown="return validarLetras(event)" name='ape' placeholder='Surname' required /><br>
                    <label for="DUI">DUI:</label><br>
                    <input type='text' maxlength="10"id="num" onkeyup="mascara(this,'-',patron2,true)" onkeydown="return validarNumeros(event)" class='form-control login-field' name='dui' placeholder='DUI' required /><br>
                    <label for="FechaNacimiento"> Fundation Date:</label><br>
                    <input type='date' class='form-control login-field' name='birth' placeholder='Fundation Date' required /><br>
                    <label for="email">E-mail:</label><br>
                    <div class='form-group'> 
                    <input type='email' id="email" class='form-control login-field' name='email' placeholder='E-mail' required /><br>
                    <label for="email2">Confirmar e-mail:</label><br>
                    <input type='email' id="remail" class='form-control login-field' name='remail' placeholder='Confirm e-mail' required  /><br>
                    <div id="val2"></div>
                    </div>
                    <label for="web">Web Site(opcional):</label><br>
                    <input type='url' class='form-control login-field' name='site' placeholder='Web Site' /><br>
                    <label for="Dirección">Adress:</label><br>
                    <input type='text' class='form-control login-field' name='adres' placeholder='Adress' required  /><br>
                    <label for="Telefono">Phone Number:</label><br>
                    <input type='tel' maxlength="9" id="num" onkeydown="return validarNumeros(event)" onkeyup="mascara(this,'-',patron3,true)" class='form-control login-field' name='phone' placeholder='Phone Number'required  /><br>
                    <p class="text-center">
                    <input type='submit' value='Sign Up' class='btn btn-primary btn-lg btn-warning'>
                    <a href='../controladores/index.php'><input type='button' value='Back' class='btn btn-primary btn-lg btn-danger'></a>
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
    <script>
    var patron3 = new Array(4,4);
    var patron2 = new Array(8,1);
        function mascara(d,sep,pat,nums){
            if(d.valant != d.value){
                val = d.value
                largo = val.length
                val = val.split(sep)
                val2 = ''
                for(r=0;r<val.length;r++){
                    val2 += val[r]	
                }
                if(nums){
                    for(z=0;z<val2.length;z++){
                        if(isNaN(val2.charAt(z))){
                            letra = new RegExp(val2.charAt(z),"g")
                            val2 = val2.replace(letra,"")
                        }
                    }
                }
                val = ''
                val3 = new Array()
                for(s=0; s<pat.length; s++){
                    val3[s] = val2.substring(0,pat[s])
                    val2 = val2.substr(pat[s])
                }
                for(q=0;q<val3.length; q++){
                    if(q ==0){
                      val = val3[q]
                    }else{
                        if(val3[q] != ""){
                            val += sep + val3[q]
                        }
                    }
                }
                    d.value = val
                    d.valant = val
            }
}
</script>
