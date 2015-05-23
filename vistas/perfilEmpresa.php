
<div class="login-form" id="perfil">
    <div class="panel panel-success" id="fieldsP">
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
            <form action="./subirFoto.php"  method="POST" enctype="multipart/form-data">
           <center> <input type="file" class="btn btn-info" name="file" id="btnfoto"><br>
            <button type="submit" class="btn btn-info"><i class="fa fa-upload"></i></button></center>
            </form>
        </div>
    </div>
         <div class="panel panel-success" id="fieldsPD">
          <div class="panel-heading">
            <h3 class="panel-title">Sitio Web</h3>
          </div>
          <div class="panel-body">
              {{Web}}
          </div>
    </div>
    <div class="panel panel-success" id="fieldsPD">
          <div class="panel-heading">
            <h3 class="panel-title">Usuario</h3>
          </div>
          <div class="panel-body">
          {{Usuario}}
        </div>
    </div>

        <div class="panel panel-success" id="fieldsPD">
          <div class="panel-heading">
            <h3 class="panel-title">Empresa</h3>
          </div>
          <div class="panel-body">
              {{Empresa}}
    </div>
    </div>
    <div class="panel panel-success" id="fieldsPD">
          <div class="panel-heading">
            <h3 class="panel-title">Correo Electronico</h3>
          </div>
          <div class="panel-body">
            {{Correo}}
          </div>
    </div>

    
    
    

</div>
