<?php
$url = "http://localhost/SkylAb-176/ALQUILARTEMIS-v2/apiRest/controllers/clientes.php?op=GetAll";
// Curl es como el fetch() en Javascript (para consumir APIs)
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = json_decode(curl_exec($curl)); 
/* echo "<pre>";
print_r($output);
echo "</pre>"; */

?>

  <?php include "new.php";?>
    
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