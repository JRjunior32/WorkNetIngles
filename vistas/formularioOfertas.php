<div class="panel panel-primary" id="ofer">
    <div class="panel-heading">        
        <h3 class="panel-title"><p class="text-center">Crear nueva oferta de trabajo</p></h3>        
    </div>
    <div class="panel-body">
        <form action="../controladores/guardarOfertas.php" method="POST">    
            <div class="form-group">
                <label for="Titulo">Titulo de la oferta:</label>
                <input type="text" class="form-control login-field" name="titulo" placeholder="Titulo de la oferta" required />

                <label for="Requisitos">Detalle:</label>
                <input type="text" class="form-control login-field" name="detalle" placeholder="Detalle" required />
                <!-- <textarea class="form-control login-field" name="requisitos" placeholder="Requisitos" required /></textarea><br> -->
                <label for="Info">Cargo:</label>
                <input type="text" class="form-control login-field" name="cargo" placeholder="Cargo Solicitado" required />
                <label for="Info">Edad:</label>
                <input type="text" id="edad" class="form-control login-field" name="edad" placeholder="Edad" required />
                <label for="Info">Requisitos</label>
                <input type="text"  class="form-control login-field" name="requisitos" placeholder="Requisitos" required /><br>
                <input type="submit" value="Crear" class="btn btn-primary btn-lg btn-warning">                
                <a href="./noticias.php" class="btn btn-danger">Cancelar</a>
                </p>
            </div>    
        </form>
    </div>
</div>