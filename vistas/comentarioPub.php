<div class="panel panel-success">
  <div class="panel-heading">
<<<<<<< HEAD
    <h3 class="panel-title">Publication</h3>
=======
    <h3 class="panel-title">Publicacion</h3>
>>>>>>> origin/Traduccion-Minero
  </div>
  <div class="panel-body">
      {{publicacion}}
  </div>
<div class="well">
    <form action="./guardarComentario.php" method="POST">
         <div class="input-group">
            <input type="hidden" name="id" value="{{Id}}">
            <textarea type="text" name="comentario" class="form-control" id="publicacion" required></textarea>
            <span class="input-group-btn">
                <input class="btn btn-default" value="Comentar" id="publicacionbtn" type="submit" >
            </span>
        </div>
    </form>
</div>
    {{comentarios}}
</div>
