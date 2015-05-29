<div class="login-form" id="perfil">
    <div class="panel panel-danger"  >
          <div class="panel-heading" id="bgimg">
            <div class="row">               
                  <div class="col-xs-6 col-md-3">
                       <a href="#" class="thumbnail" id="photot" >
                          <img src="{{photo}}" alt="User Avatar" class="img-circle" id="foto-perfil">
                        </a>
                </div>
          </div>
          <div class="panel-body">
            <form action="./subirFoto.php"  method="POST" enctype="multipart/form-data">
            <input type="file" class="btn btn-info" name="file" id="btnfoto"><br>
            <button type="submit" class="btn btn-info" id="btnfile"><i class="fa fa-upload"></i></button>
            </form>
        </div>
    </div>
        </div>

    <div class="panel panel-default">
            <div class=" panel-heading">
                General Information
            </div>
    </div>
        <div class="panel panel-default" id="az">
          <div class="panel-body">
            <b>User:</b> {{Usuario}}<br>
            <b>Company:</b> {{Empresa}}<br>
            <b>E-mail:</b> {{Correo}}<br>
            <b>Fundation Date:</b> {{Fun}}<br>
            <b>Web Site:</b> {{Web}}<br>
          </div>
    </div>
    
        </div>


