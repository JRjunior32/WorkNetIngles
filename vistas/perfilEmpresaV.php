<div class="login-form" id="perfil">
    <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="row"> 
                  <div class="col-xs-3 col-md-12">
                   <!-- <img src="{{photo}}" id="backimg" >-->
                      <center><a href="" class="thumbnail" id="photot" data-toggle="modal" data-target="#myModal">
                          <img src="{{photo}}" alt="User Avatar" class="img-circle" id="foto-perfil">
                        </a></center> 
                </div>
          </div>
          
    </div>
        </div>
    
        <div class="panel panel-default">
            <div class=" panel-heading">
<<<<<<< HEAD
                <a href="./agregarAmigo.php?idCuenta={{Id}}" class="btn btn-success"><i class="fa fa-user-plus"></i> Add Friend</a>
                <a href="./crearPortafolioV.php?cuenta_idCuenta={{Id}}" class="btn btn-warning" id="med"><i class="fa fa-suitcase"></i> Portfolio</a>
                <a href="#" class="btn btn-danger" id="iz"><i class="fui-cross"></i> Complain</a>
=======
                <a href="./agregarAmigo.php?idCuenta={{Id}}" class="btn btn-success"><i class="fa fa-user-plus"></i> Agregar amigo</a>
                <a href="./crearPortafolioV.php?cuenta_idCuenta={{Id}}" class="btn btn-warning" id="med"><i class="fa fa-suitcase"></i> Portafolio</a>
                <a href="#" class="btn btn-danger" id="iz"><i class="fui-cross"></i> Denunciar</a>
>>>>>>> origin/Traduccion-Minero

            </div>
    </div>
    
    <div class="panel panel-default">
            <div class=" panel-heading">
<<<<<<< HEAD
               <b>General Information</b> 
=======
               <b>Información General</b> 
>>>>>>> origin/Traduccion-Minero
            </div>
    </div>
        <div class="panel panel-default" id="az">
          <div class="panel-body">
<<<<<<< HEAD
            <b>User:</b> {{Usuario}}<br>
            <b>Company:</b> {{Empresa}}<br>
            <b>E-mail:</b> {{Correo}}<br>
            <b>Fundation Date:</b> {{Fun}}<br>
=======
            <b>Usuario:</b> {{Usuario}}<br>
            <b>Empresa:</b> {{Empresa}}<br>
            <b>E-mail:</b> {{Correo}}<br>
            <b>Fecha de fundación:</b> {{Fun}}<br>
>>>>>>> origin/Traduccion-Minero
            <b>Web Site:</b> {{Web}}<br>
          </div>
    </div>
    <input type="hidden" value="{{Id}}">
    
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

