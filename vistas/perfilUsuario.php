
<div class="login-form" id="perfil">
    <div class="panel panel-danger" id="fieldsP">
          <div class="panel-heading">
            <div class="row"> 
                  <div class="col-xs-6 col-md-3">
                   <a href="#" class="thumbnail" id="photot" >
                      <img src="{{photo}}" alt="..." class="imagenP" >
                    </a>
                  </div>
                </div>
          </div>
          <div class="panel-body">
            <form action="./subirFotoUsuario.php"  method="POST" enctype="multipart/form-data">
           <center> <input type="file" class="btn btn-danger" name="file" id="btnfoto"><br>
            <button type="submit" class="btn btn-danger"><i class="fa fa-upload"></i></button></center>
            </form>
        </div>
    </div>
         <div class="panel panel-danger" id="fieldsPD">
          <div class="panel-heading">
            <h3 class="panel-title">DUI</h3>
          </div>
          <div class="panel-body">
              {{DUI}}
          </div>
    </div>
    <div class="panel panel-danger" id="fieldsPD">
          <div class="panel-heading">
            <h3 class="panel-title">Usuario</h3>
          </div>
          <div class="panel-body">
          {{Usuario}}
        </div>
    </div>

        <div class="panel panel-danger" id="fieldsPD">
          <div class="panel-heading">
            <h3 class="panel-title">Nombre</h3>
          </div>
          <div class="panel-body">
              {{Nombre}}
    </div>
    </div>
    <div class="panel panel-danger" id="fieldsPD">
          <div class="panel-heading">
            <h3 class="panel-title">Apellido</h3>
          </div>
          <div class="panel-body">
            {{Apellido}}
          </div>
    </div>
        <div class="panel panel-danger" id="fieldsP">
          <div class="panel-heading">
            <h3 class="panel-title">Correo Electronico</h3>
          </div>
          <div class="panel-body">
            {{Correo}}
          </div>
    </div>


    
    
    

</div>
