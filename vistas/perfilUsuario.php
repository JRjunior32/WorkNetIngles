<div class="login-form" id="perfil">
    <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="row"> 
                  <div class="col-xs-6 col-md-3">
                       <a href="" class="thumbnail" id="photot" data-toggle="modal" data-target="#myModal">
                          <img src="{{photo}}" alt="User Avatar" class="img-circle" id="foto-perfil">
                        </a>
                </div>
          </div>

    </div>
        <div class="panel-body">
            <form action="./subirFotoUsuario.php"  method="POST" enctype="multipart/form-data">
            <input type="file" class="btn btn-info" name="file" id="btnfoto"><br>
            <button type="submit" class="btn btn-info" id="btnfile"><i class="fa fa-upload"></i></button>
            </form>
        </div>
        </div>
          
    <div class="panel panel-default">
            <div class=" panel-heading">
<<<<<<< HEAD
                General Information
=======
                Información General
>>>>>>> origin/Traduccion-Minero
            </div>
    </div>
        <div class="panel panel-default" id="az">
          <div class="panel-body">
<<<<<<< HEAD
            <b>User:</b> {{Usuario}}<br>
            <b>DUI:</b> {{DUI}}<br>
            <b>First Name:</b> {{Nombre}}<br>
              <b>Surname: </b> {{Apellido}}<br>
=======
            <b>Usuario:</b> {{Usuario}}<br>
            <b>DUI:</b> {{DUI}}<br>
            <b>Nombre:</b> {{Nombre}}<br>
              <b>Apellido: </b> {{Apellido}}<br>
>>>>>>> origin/Traduccion-Minero
            <b>E-mail:</b> {{Correo}}<br>
          </div>
    </div>
    
        </div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{Usuario}}</h4>
      </div>
      <div class="modal-body">
        <img src="{{photo}}" id="imgc">
      </div>
    </div>
  </div>
</div>
