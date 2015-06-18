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
        <form action="../controladores/guardarUsuario.php" method="POST">
            <div class="login-form">
                <div class="from-group">
                    <center><h3>Sign Up</h3></center>                    
                    User:<input type="text" class="form-control login-field" name="usuario" placeholder="User" required /><br>
                    </div>
                    <div class="from-group">
                    Password:<input type="password" minlength="5" id="pass" class="form-control login-field" name="pass" placeholder="Password" required /> <br>
                    Confirm Password:<input type="password" id="repass" class="form-control login-field" name="repass" placeholder="Confirm Password" required /><br>
                    <div id="val"></div>
                    </div>
                    <div class="from-group">
                    Name:<input type="text"id="letras" onkeydown="return validarLetras(event)" class="form-control login-field" name="name" placeholder="Name" /><br>
                    Surname:<input type="text"id="letras" onkeydown="return validarLetras(event)" class="form-control login-field" name="ape" placeholder="Surname" required /><br>
                    </div>
                    <div class="from-group">
                    E-mail:<input type="email" id="email" class="form-control login-field" name="mail" placeholder="E-mail" required /><br>
                    Confirm e-amil:<input type="email" id="remail" class="form-control login-field" name="remail" placeholder="Confim e-mail" required /><br>
                    <div id="val2"></div>
                    </div>
                    <div class="from-group">
                    Birth Day:<input type="date" class="form-control login-field" name="birth" placeholder="Birth Day" required /><br>
                    DUI:<input type="text" class="form-control login-field" onkeyup="mascara(this,'-',patronDUI,true)" id="num" onkeydown="return validarNumeros(event)" maxlength="10" name="dui" placeholder="DUI" required /><br>
                    <p class="text-center">
                        <input type="submit" name="Sign Up" value="Registrar" class="btn btn-primary btn-lg btn-warning" >
                        <a href="../controladores/index.php"><input type="button" value="Back" class="btn btn-primary btn-lg btn-danger" ></a>
                    </p>
                </div>
            </div>   
        </form>   
    </body>
    <script src="../vistas/recursos/js/jquery.min.js"></script>    
    <script src="../vistas/recursos/js/flat-ui.min.js"></script>    
</html>

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
        $("#email,#remail").keyup(function(){
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
    var patronDUI = new Array(8,1);
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
