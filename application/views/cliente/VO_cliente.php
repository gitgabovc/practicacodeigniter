
<?php 

if($opcion == "listar")
{ ?>
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
                  foreach ($clientes->result() as $row) 
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
                            <button type="button" onclick="btn_editar('<?php echo $id_cliente; ?>');"  class="btn btn-primary"   data-bs-toggle="modal" data-bs-target="#myModal_editar" >Editar</button>
                        </td>
                        <td scope="col">

                              <input type="button"  name="buttony" onclick="btn_eliminar('<?php echo $id_cliente; ?>');"  class="btn btn-danger" value="Eliminar">
                           
                        </td>

                    </tr>
                <?php    
                  }

                ?>
                
                
              </tbody>
            </table>

<?php } 
if($opcion == "editar")
{
  foreach($clientes->result() as $row){
?>
  <div class="container">
    <div class="row">
    
    <div class="col-md-4 col-xs-12">
      <div class="row">
      <input type="hidden" class="form-control"  id="id_client" aria-describedby="emailHelp" value="<?php echo $row->id_cliente; ?>">

        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Fotografia</label>
          <input type="text" class="form-control" required  name="fotografia" id="fotografia_edi" aria-describedby="emailHelp" value="<?php echo $row->fotografia; ?>">
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Cliente</label>
          <input type="text" class="form-control" required name="cliente" id="cliente_edi" aria-describedby="emailHelp" value="<?php echo $row->cliente; ?>">
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Ci_cli</label>
          <input type="text" class="form-control"  name="ci_cli" id="ci_cli_edi" aria-describedby="emailHelp" value="<?php echo $row->ci_cli; ?>">
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Celular_cli</label>
          <input type="text" class="form-control" required name="celular_cli" id="celular_cli_edi" aria-describedby="emailHelp" value="<?php echo $row->celular_cli; ?>">
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Direccion_cli</label>
          <input type="text" class="form-control" required name="direccion_cli" id="direccion_cli_edi" aria-describedby="emailHelp" value="<?php echo $row->direccion_cli; ?>">
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Observacion_cli</label>
          <input type="text" class="form-control" required name="observacion_cli" id="observacion_cli_edi" aria-describedby="emailHelp"value="<?php echo $row->observacion_cli; ?>">
        </div>
  
    </div> 
  
    </div> 
  </div> 
  
<?php
  }
}
if($opcion =="buscador"){
  ?>  


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
                  foreach ($clientess->result() as $row) 
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
                            <button type="button" onclick="btn_editar('<?php echo $id_cliente; ?>');"  class="btn btn-primary"   data-bs-toggle="modal" data-bs-target="#myModal_editar" >Editar</button>
                        </td>
                        <td scope="col">

                              <input type="button"  name="buttony" onclick="btn_eliminar('<?php echo $id_cliente; ?>');"  class="btn btn-danger" value="Eliminar">
                           
                        </td>

                    </tr>
                <?php    
                  }

                ?>
                
                
              </tbody>
            </table>


  <?php  
}
if($opcion =="formulario"){
  ?>
      <div class="container">
    <div class="row">
    
    <div class="col-md-4 col-xs-12">
      <div class="row">
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Fotografia</label>
          <input type="text" class="form-control" required  name="fotografia" id="fotografia" aria-describedby="emailHelp" >
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Cliente</label>
          <input type="text" class="form-control" required name="cliente" id="cliente" aria-describedby="emailHelp" >
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Ci_cli</label>
          <input type="text" class="form-control"  name="ci_cli" id="ci_cli" aria-describedby="emailHelp" >
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Celular_cli</label>
          <input type="text" class="form-control" required name="celular_cli" id="celular_cli" aria-describedby="emailHelp" >
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Direccion_cli</label>
          <input type="text" class="form-control" required name="direccion_cli" id="direccion_cli" aria-describedby="emailHelp" >
        </div>
        <div class="col-lg-12">
          <label for="exampleInputEmail1" class="form-label">Observacion_cli</label>
          <input type="text" class="form-control" required name="observacion_cli" id="observacion_cli" aria-describedby="emailHelp">
        </div>
  
    </div> 
  
    </div> 
  </div> 

  <?php  
}
  ?>