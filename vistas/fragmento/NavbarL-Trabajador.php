<a href='./perfil_Mostrar.php' class='list-group-item active'>Perfil<br>    </a>
<a href="./mensajes.php" class="list-group-item"><span class="fui-chat"></span>Mensajes</a>
<a href="#" class="list-group-item"><span class="fui-video"></span>Video Conferencia</a>
<a href="../vistas/calendarioEmpresa.php" class="list-group-item"><span class="fui-calendar-solid"></span>Eventos</a>
<a href="" class="list-group-item" data-toggle="modal" data-target="#myModal"><span class="fui-calendar-solid"></span>Crear Evento</a>
<a href="./logout.php" class="list-group-item"><span class="fui-power"></span>Cerrar Sesión</a>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Aviso!</h4>
      </div>
      <div class="modal-body">
        Esta seccion sera unicamente para crear solicitudes de eventos, el empresario debera aceptar la solicitud.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a type="button" href="../controladores/formEventos.php" class="btn btn-primary">Aceptar</a>
      </div>
    </div>
  </div>
</div>