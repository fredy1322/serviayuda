
<!--ventana para Update--->
<div class="modal fade" id="cambiohorario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="backdrop2"> <div class="modal-dialog">  
    <div class="modal-content">
      <div class="modal-header" style="background-color: #000000eb;">
        <h6 class="title-modal" style="color: #fff; text-align: center;">   
            Crear nuevo perfil
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cierram" aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="acciones/crearperfil">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="title-input">Nuevo perfil:</label>
                  <input type="text" name="tipo" class="form-control"  required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="title-input">Descripcion:</label>
                  <input type="text" name="descripcion" class="form-control"  required="true">
                </div>
               
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div></div>
<!---fin ventana Update --->
