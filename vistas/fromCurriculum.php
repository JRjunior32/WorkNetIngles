<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Crear Curriculum</h3>
  </div>
 <form method="POST" action="../controladores/guardarCurriculum.php">
    <div class="panel-body">
        <label>Nombre Completo</label>
        <input type="text" class="form-control" name="name" placeholder="Nombre Completo" Required>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel-body">
                <label>Telefono</label>
                <input type="tel" name="tel" class="form-control" placeholder="Telefono">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel-body">
                <label>Celular</label>
                <input type="tel" name="cel" class="form-control" placeholder="Celular">
            </div>
        </div>
    </div>
    <div class="panel-body">
        <label>Direccion</label>
        <input type="text" class="form-control" name="dic" placeholder="Dirreccion" required>
    </div>
    <div class="panel-body">
        <label>Formacion Academica</label>
        <textarea class="form-control" id="fa" name="academica" placeholder="Formacion Academica" required></textarea>
    </div>
    <div class="panel-body">
        <label>Experiencia Laboral</label>
        <textarea class="form-control" id="fa" name="ex" placeholder="Formacion Academica" required></textarea>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel-body">
                <label>Referencia</label>
                <input type="tel" name="ref1" class="form-control" placeholder="Referencia">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel-body">
                <label>Telefono</label>
                <input type="tel" name="tel1" class="form-control" placeholder="Telefono">
            </div>
        </div>
    </div>     
    <div class="row">
        <div class="col-lg-6">
            <div class="panel-body">
                <label>Referencia</label>
                <input type="tel" name="ref2" class="form-control" placeholder="Referencia">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel-body">
                <label>Telefono</label>
                <input type="tel" name="tel2" class="form-control" placeholder="Telefono">
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-lg-6">
            <div class="panel-body">
                <label>Referencia</label>
                <input type="tel" name="ref3" class="form-control" placeholder="Referencia">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel-body">
                <label>Telefono</label>
                <input type="tel" name="tel3" class="form-control" placeholder="Telefono">
            </div>
        </div>
    </div>
        <center>
        <a class="btn btn-default" href="../controladores/publicar.php"> Cancelar</a>
        <input type="submit" class="btn btn-success">
        </center><br>
    </form>

</div> 