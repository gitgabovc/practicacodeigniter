<div class="container" style="margin-left:50px;">
  <div class="row">
    <!-- Formulario de registro -->

    <div class="col-md-4 col-xs-12" >
      <h2 class="text-center mb-12">Insertar Cliente</h2>
      <div class="row">
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Fotografia</label>
          <input type="text" class="form-control" required  name="fotografia" id="fotografia" aria-describedby="emailHelp">
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Cliente</label>
          <input type="text" class="form-control" required name="cliente" id="cliente" aria-describedby="emailHelp">
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Ci_cli</label>
          <input type="text" class="form-control"  name="ci_cli" id="ci_cli" aria-describedby="emailHelp">
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Celular_cli</label>
          <input type="text" class="form-control" required name="celular_cli" id="celular_cli" aria-describedby="emailHelp">
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Direccion_cli</label>
          <input type="text" class="form-control" required name="direccion_cli" id="direccion_cli" aria-describedby="emailHelp">
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Observacion_cli</label>
          <input type="text" class="form-control" required name="observacion_cli" id="observacion_cli" aria-describedby="emailHelp">
        </div>
        
        
        
        <div class="col-lg-12">
          <div id="panel_respuesta"></div>
            <center style="margin-top:3%;">
            <button type="button" class="btn btn-primary " onclick="btn_guardar_datos();"> Aceptar</button>
            </center>
          </div> 
        </div>
    </div>

<!-- Listado de cliente -->
    <div class="col-md-8 col-xs-12"">
        <h2 align="center">lista de datos</h2>
        <input type="text" class="form-control"  name="" id="dato_buscado" aria-describedby="emailHelp" onkeyup="btn_buscar();" style="width:70%;display:inline;margin-top:30px; margin-bottom:15px;">
        <button type="button" class="btn btn-primary " onclick="btn_buscar();"> Buscar</button>
        <button type="button" class="btn btn-primary " onclick="btn_listar_datos();"> Listar</button>
        <div id="panel_listado">
            <table class="table" >
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Fotografía</th>
                  <th scope="col">Cliente</th>
                  <th scope="col">Ci_cli</th>
                  <th scope="col">Celular_cli</th>
                  <th scope="col">Direccion_cli</th>
                  <th scope="col">Observación_cli</th>
                  <th scope="col">Modificar</th>
                  <th scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
                
                <?php
                    $indice=0;
                  foreach ($cliente->result() as $row) 
                  {  $id_cliente = $row->id_cliente;
                ?>
                    <tr>
                        <th scope="row"><?php $indice++; echo $indice;?></th>
                        <td><?php echo $row->fotografia; ?></td>
                        <td><?php echo $row->cliente; ?></td>
                        <td><?php echo $row->ci_cli; ?></td>
                        <td><?php echo $row->celular_cli; ?></td>
                        <td><?php echo $row->direccion_cli; ?></td>
                        <td><?php echo $row->observacion_cli; ?></td>
                        <td scope="col">          
                          <!-- <input type="button"  name="buttonx"  class="btn btn-success" value="Modificar" data-bs-toggle="modal" data-bs-target="#myModal_editar" onclick="btn_editar(<?php// echo $id_cliente; ?>);">     -->
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal_editar" onclick="btn_editar('<?php echo $id_cliente; ?>');" >
                            Editar
                          </button>   
                        </td>
                        <td scope="col">

                          <input type="button"  name="buttony" data-bs-toggle="modal" data-bs-target="#myModal_editar" onclick="btn_eliminar('<?php echo $id_cliente; ?>');"  class="btn btn-danger" value="Eliminar" >
                           
                        </td>

                    </tr>
                <?php    
                  }

                ?>
                
                
              </tbody>
            </table>
            </div>



        
        
    
    </div>
  </div>
</div>



<!-- The Modal -->
<div class="modal fade" id="myModal_editar">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color: #084B8A; color:white">
        <h4 class="modal-title">Modal Editar</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" ></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
        <div id="panel_editar"></div>
        <div id="panel_respuesta_edicion"></div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal" onclick="btn_guardar_edicion()">Guardar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>

<!-- The Modal Eliminar -->
<div class="modal fade" id="myModal_eliminar">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color: #084B8A; color:white">
        <h4 class="modal-title">Modal Eliminar</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" ></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
        <div id="panel_eliminar"></div>
        <div id="panel_respuesta_eliminar"></div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal" onclick="btn_guardar_edicion()">Guardar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>