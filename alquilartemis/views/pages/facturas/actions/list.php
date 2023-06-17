<!-- /.card -->
<?php
$url = "http://localhost/SkylAb-176/ALQUILARTEMIS-v2/apiRest/controllers/facturas.php?op=GetAll";
//! Curl es como el fetch() en Javascript (para consumir APIs)
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = json_decode(curl_exec($curl)); 

?>

<?php include "new.php"; ?>

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
                    <th>ID CLIENTE</th>
                    <th>ID EMPLEADO</th>
                    <th>FECHA SALIDA</th>
                    <th>SUBTOTAL</th>
                    <th>PLACA</th>
                    <th>OBSERVACIONES</th>
                    <th>DETALLE</th>
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
        <td><?php echo $out -> id_salida; ?></td>
        <td><?php echo $out -> id_cliente; ?></td>
        <td><?php echo $out -> id_empleado; ?></td>
        <td><?php echo $out -> fecha_salida; ?></td>
        <td><?php echo $out -> subtotal_peso; ?></td>
        <td><?php echo $out -> placa_transporte; ?></td>
        <td><?php echo $out -> observaciones; ?></td>
        <td><button type="button" class="btn btn-info">DETAIL</button></td>
        <td><button type="button" class="btn btn-danger">DELETE</button></td>
        <td><button type="button" class="btn btn-warning">UPDATE</button></td>
        </tr>
        <?php 
          }
        ?>
        </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>ID CLIENTE</th>
                    <th>ID EMPLEADO</th>
                    <th>FECHA SALIDA</th>
                    <th>SUBTOTAL</th>
                    <th>PLACA</th>
                    <th>OBSERVACIONES</th>
                    <th>DETALLE</th>
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
      
