     
<div class="panel panel-warning" id="newsfeed2">
  <div class="panel-heading">
    <h3 class="panel-title">News</h3>
  </div>
  <div class="panel-body">
    <div class="form-group">
        <form action="../controladores/guardarPub.php" method="POST">
                <div class="form-group">
                  <label class="control-label">Type something...</label>
                  <div class="input-group">
                      <textarea type="text" name="texto" class="form-control" id="publicacion" required></textarea>
                    <span class="input-group-btn">
                      <input class="btn btn-default" value="Share" id="publicacionbtn" type="submit" >
                    </span>
                  </div>
                </div>        
        </form>
        {{publicaciones}} 
  </div>
</div>
    
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<<<<<<< HEAD
        <h4 class="modal-title" id="myModalLabel">Denuncia</h4>
=======
        <h4 class="modal-title" id="myModalLabel">Comments</h4>
>>>>>>> origin/traduccionVistas
      </div>
        <form action="./denunciar.php" method="POST">
      <div class="modal-body">
          <h6>Por favor escriba la razon de su denuncia</h6><input type="hidden" name="id" value="{{id}}">
           <div class="form-group">
                <div class="col-lg-10">
                    <textarea required class="form-control" name="razon" rows="3" id="publicacion" id="textArea"></textarea>
                </div>
    </div>
        
      </div>
<<<<<<< HEAD
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-primary" value="Denunciar">
    </form>
=======
            <form action="../controladores/guardarComentario.php" method="POST">
        <div class="modal-footer">
        <div class="form-group">
          <label class="control-label" id="iz">Comment</label>
          <input class="form-control input-lg" type="text" name="comentario" id="inputLarge">
        </div>
        <input type="submit" class="btn btn-primary" value="Comment">
>>>>>>> origin/traduccionVistas
      </div>
    </div>
  </div>
</div>
            
    