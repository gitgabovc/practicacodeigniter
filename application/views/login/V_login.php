
<?php if (isset($this->session->userdata['s_id_usuario']))
{
  
?>
<input type="text"   id="id_usuario_session" value="<?php echo $this->session->userdata['s_id_usuario']; ?>">
<?php
}
?>

<!-- del anterior login -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
      <center>
			<h1>Login de usuarios</h1>

      <br>		
	  <div class="mb-2">
			    <div id="panel_respuesta_ingreso"></div>
	  </div>
				<div class="mb-3">
					<input type="email" class="form-control" id="email" aria-describedby="emailHelp" style="width:400px" placeholder="*Email">
					
				</div>
        <br>
				<div class="mb-3">
					<input type="password" class="form-control" id="password" style="width:400px" placeholder="*Password">
				</div>
				
		
        <br>

        </center>
		
		
		<center>
				<button type="button" class="btn btn-primary" onclick="login();">Ingresar</button>
        </center>
		
		</div>
	</div>
</div>
<!-- The Modal guardar -->
<div class="modal fade" id="myModal_registrar">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color: #084B8A; color:white">
        <h4 class="modal-title">Modal Registrar</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" ></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
        <div id="panel_registrar"></div>
        <div id="panel_respuesta_registrar"></div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal" onclick="btn_guardar_dato();">Guardar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>


