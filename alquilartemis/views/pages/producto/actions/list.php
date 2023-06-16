<?php
$url = "http://localhost/SkylAb-128/ALQUILARTEMIS/apiRest/controllers/productos.php?op=GetAll";
// Curl es como el fetch() en Javascript (para consumir APIs)
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = json_decode(curl_exec($curl));
/* echo "<pre>";
print_r($output);
echo "</pre>"; */

?>

<?php include("new.php");?>

<div class="card">
    <div class="card-header">
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>STOCK INICIAL</th>
          <th>CANTIDAD DE INGRESOS</th>
          <th>CANTIDAD DE EGRESOS</th>
          <th>FECHA INVENTARIO</th>
          <th>TIPO DE OPERACIÓN</th>
          <th>ACTUALIZAR</th>
          <th>BORRAR</th>
        </tr>
        </thead>
        <tbody>
          <?php 
            foreach($output as $out)
            { 
          ?>
        <tr>
        <td><?php echo $out -> id_producto; ?></td>
        <td><?php echo $out -> nombre; ?></td>
        <td><?php echo $out -> stock_inicial; ?></td>
        <td><?php echo $out -> cantidad_ingresos; ?></td>
        <td><?php echo $out -> cantidad_salidas; ?></td>
        <td><?php echo $out -> fecha_inventario; ?></td>
        <td><?php echo $out -> tipo_operacion; ?></td>
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