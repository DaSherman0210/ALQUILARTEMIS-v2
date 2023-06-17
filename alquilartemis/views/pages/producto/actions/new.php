<?php 

ini_set("display_errors" , 1);
ini_set("display_startup_errors" , 1);

error_reporting(E_ALL);

if (isset($_POST['enviar'])) {
    $url = "http://localhost/SkylAb-119/ALQUILARTEMIS-v2/apiRest/controllers/productos.php?op=insert";

    $data = array(
        'nombre' => $_POST['nombre'],
        'stock_inicial' => $_POST['stock_inicial'],
        'cantidad_ingresos' => $_POST['cantidad_ingresos'],
        'cantidad_salidas' => $_POST['cantidad_salidas'],
        'fecha_inventario' => $_POST['fecha_inventario'],
        'tipo_operacion' => $_POST['tipo_operacion']
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    $response = curl_exec ($ch);
    curl_close($ch);

    echo "<pre>";
    print_r($response);
    echo "</pre>";

    echo "<script>alert('Datos Guardados correctamente');document.location='producto'</script>";
}

?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Nuevo Producto
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                  <div class="mb-4 row">
                  <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                  </div>
                  <div class="mb-4 row">
                  <label for="stock_inicial" class="col-sm-2 col-form-label">Stock Inicial</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="stock_inicial" name="stock_inicial">
                    </div>
                  </div>
                  <div class="mb-4 row">
                  <label for="cantidad_ingresos" class="col-sm-2 col-form-label">Cantidad De Ingresos</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="cantidad_ingresos" name="cantidad_ingresos">
                    </div>
                  </div>
                  <div class="mb-4 row">
                  <label for="cantidad_salidas" class="col-sm-2 col-form-label">Cantidad de Salidas</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="cantidad_salidas" name="cantidad_salidas">
                    </div>
                  </div>
                  <div class="mb-4 row">
                  <label for="fecha_inventario" class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="fecha_inventario" name="fecha_inventario">
                    </div>
                  </div>
                  <div class="mb-4 row">
                  <label for="tipo_operacion" class="col-sm-2 col-form-label col-16">Tipo de Operacion</label>
                  <select class="form-select" aria-label="Disabled select example" name="tipo_operacion" id="tipo_operacion">
                    <option selected>Selecciona Tipo De Operacion</option>
                    <option value="compra">Compra</option>
                    <option value="salida">Salida</option>
                    <option value="devolucion">Devolucion</option>
                    <option value="daño">Daño</option>
                  </select>
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