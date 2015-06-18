<!DOCTYPE>
<html>
    <head>
        <title>WorkNet</title>
        <meta charset="utf-8">
        <link href="../vistas/recursos/css/bootstrap.css" rel="stylesheet">
        <link href="../vistas/recursos/css/flat-ui.css" rel="stylesheet">    
        <link href="../style.css" rel="stylesheet">    
    </head>
    <body>
        <form action="../controladores/cambiarContraTrabajador.php" method="POST">
            <div class="login-form" id="cat">
                <div class="from-group">
                    <center><h3>Change Password</h3></center>
                    <div class="form-group">
                        <label>Current Password:</label>
                        <input type="password" minlegth="5" class="form-control login-field" placeholder="Current Password" name="oldpass" required>
                        <br><br>
                        <label>New Password</label>
                        <input type="password" minlength="5"  class="form-control login-field" placeholder="New Password" name="newpass" required><br><br>
                        <input type="password" minlength="5"  class="form-control login-field" placeholder="Confirm Password" name="newrepass" required><br><br>
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