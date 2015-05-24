<!DOCTYPE>
<html>
    <head>
        <title>Registrar</title>
        <meta charset="utf-8">
        <link href="../vistas/recursos/css/bootstrap.css" rel="stylesheet">
        <link href="../vistas/recursos/css/flat-ui.css" rel="stylesheet">    
        <link href="../style.css" rel="stylesheet">    
    </head>
    <body>
        <form action="../controladores/cambiarContraEmpre.php" method="POST">
            <div class="login-form" id="cat">
                <div class="from-group">
                    <center><h3>Cambiar Contraseña</h3></center>
                    <div class="form-group">
                        <label>Contraseña Actual:</label>
                        <input type="password" minlegth="5" class="form-control login-field" placeholder="Ingresar Contraseña Actual" name="oldpass" required>
                        <br><br>
                        <label>Nueva Contraseña</label>
                        <input type="password" minlength="5"  class="form-control login-field" placeholder="Ingresar Nueva Contraseña" name="newpass" required><br><br>
                        <input type="password" minlength="5"  class="form-control login-field" placeholder="Ingresar de nuevo" name="newrepass" required><br><br>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Guardar">
                    </div>
                   
                </div>
            </div>   
        </form>   
    </body>
    <script src="../vistas/recursos/js/jquery.min.js"></script>    
    <script src="../vistas/recursos/js/flat-ui.min.js"></script>  
</html>