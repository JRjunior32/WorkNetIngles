
        
            <div class="login-form" id="cambiarcontra">
                <form action="../controladores/cambiarContraAdmin.php" method="POST">
                <div class="from-group">
                    <center><h3>Cambiar Contraseña</h3></center>
                    <div class="form-group">
                        <label>Contraseña Actual:</label>
                        <input type="password" minlength="5"  class="form-control login-field" placeholder="Ingresar Contraseña Actual" name="oldpass" required>
                        <label>Nueva Contraseña</label>
                        <input type="password" minlength="5"  class="form-control login-field" placeholder="Ingresar Nueva Contraseña" name="newpass" required><br>
                        <input type="password" minlength="5"  class="form-control login-field" placeholder="Ingresar de nuevo" name="newrepass" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success"  value="Guardar">
                    </div>
                   
                </div>
                </form>   
            </div>   
      
   