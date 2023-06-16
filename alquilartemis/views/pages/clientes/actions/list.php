<?php
$url = "http://localhost/SkylAb-128/ALQUILARTEMIS/apiRest/controllers/clientes.php?op=GetAll";
// Curl es como el fetch() en Javascript (para consumir APIs)
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = json_decode(curl_exec($curl)); 
/* echo "<pre>";
print_r($output);
echo "</pre>"; */

?>

<div class="card">
    <div class="card-header">
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        New psichologists
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Psichologist</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="views/pages/psichologists/actions/new_psico.php" method="post">
                  <div class="mb-4 row">
                      <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="nombres" name="nombres">
                      </div>
                      </div>
                      <div class="mb-4 row">
                      <label for="especialidad" class="col-sm-2 col-form-label">Especialidad</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="especialidad" name="especialidad">
                      </div>
                      </div>
                      <div class="mb-4 row">
                      <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="telefono" name="telefono">
                      </div>
                      </div>
                      <div class="mb-4 row">
                      <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="direccion" name="direccion">
                      </div>
                      </div>
                      <div class="mb-4 row">
                          <input type="submit" class="btn btn-primary" name="enviar" value="enviar">
                      </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRES</th>
          <th>ESPECIALIDAD</th>
          <th>TELEFONO</th>
          <th>DIRECCION</th>
          <th>BORRAR</th>
          <th>ACTUALIZAR</th>
        </tr>
        </thead>
        <tbody>
          <?php 
            foreach($output as $out)
            { 
          ?>
        <tr>
        <td><?php echo $out -> id_cliente; ?></td>
        <td><?php echo $out -> nombre; ?></td>
        <td><?php echo $out -> ubicacion; ?></td>
        <td><?php echo $out -> telefono; ?></td>
        <td><?php echo $out -> email; ?></td>
        <td><button type="button" class="btn btn-primary">UPDATE</button></td>
        <td><button type="button" class="btn btn-danger">DELETE</button></td>
        </tr>
        <?php 
          }
        ?>
        </tbody>
    </table>
    </div>
    <!-- /.card-body -->
</div>


<!-- <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script> -->