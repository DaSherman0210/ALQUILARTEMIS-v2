<!-- /.card -->
<?php
$url = "http://localhost/SkylAb-128/ALQUILARTEMIS/apiRest/controllers/empleados.php?op=GetAll";
// Curl es como el fetch() en Javascript (para consumir APIs)
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = json_decode(curl_exec($curl)); 

?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Registrar Devolucion
</button>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>NOMBRES</th>
                    <th>UBICACIÓN</th>
                    <th>TELEFONO</th>
                    <th>EMAIL</th>
                    <th>BORRAR</th>
                    <th>EDITAR</th>
                  </tr>
                  </thead>
                  <tbody>
          <?php 
            foreach($output as $out)
            { 
          ?>
        <tr>
        <td><?php echo $out -> id_empleado; ?></td>
        <td><?php echo $out -> nombres; ?></td>
        <td><?php echo $out -> direccion; ?></td>
        <td><?php echo $out -> telefono; ?></td>
        <td><?php echo $out -> email; ?></td>
        <td><button type="button" class="btn btn-primary">UPDATE</button></td>
        <td><button type="button" class="btn btn-danger">DELETE</button></td>
        </tr>
        <?php 
          }
        ?>
        </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>NOMBRES</th>
                    <th>UBICACIÓN</th>
                    <th>TELEFONO</th>
                    <th>EMAIL</th>
                    <th>BORRAR</th>
                    <th>EDITAR</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Devolucion</h1>
        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
    </div>
    <div class="modal-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" >
            </div>
            <div class="mb-3">
                <label for="stock_inicial" class="form-label">Stock Inicial</label>
                <input type="number" class="form-control" id="stock_inicial" name="stock_inicial">
            </div>
            <div class="mb-3">
                <label for="cantidad_ingresos" class="form-label">Cantidad Ingresos</label>
                <input type="number" class="form-control" id="cantidad_ingresos" name="cantidad_ingresos">
            </div>
            <div class="mb-3">
                <label for="cantidad_egresos" class="form-label">Cantidad Egresos</label>
                <input type="number" class="form-control" id="cantidad_egresos" name="cantidad_egresos">
            </div>
            <div class="mb-3">
                <label for="stock_final" class="form-label">Stock Final</label>
                <input type="number" class="form-control" id="stock_final" name="stock_final">
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
            </div>
            <div class="mb-3">
            <label for="tipo_operacion" class="form-label">Tipo Operacion</label>
            <select class="form-select" name="tipo_operacion" id="tipo_operacion" aria-label="Default select example">
                <option selected>Selecciona el tipo de operacion</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>