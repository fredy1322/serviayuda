
<!--ventana para Update--->
<div class="modal fade" id="modalvacio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="backdrop2"> <div class="modal-dialog">  
    <div class="modal-content">
      <div class="modal-header" style="background-color: #000000eb;">
        <h6 class="title-modal" style="color: #fff; text-align: center;">   
            Solicitar vacio laboral
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cierram" aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="modales/acciones/modalvacio.php">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                <center><label for="recipient-name" class="title-input"><b>Recuerde que la fecha que usted seleccione será analizada por su supervisor quien le informará posteriormente la fecha real de su salida a vacio laboral.</b></label></center> <br>
                  <label for="recipient-name" class="title-input">Cedula:</label>
                  <input type="text" name="cc" class="form-control" value="<?php echo $cc ?>" required="true" readonly>
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="title-input">Fecha tentativa:</label>
                  <input type="date" name="fecha" class="form-control"  required="true">
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
