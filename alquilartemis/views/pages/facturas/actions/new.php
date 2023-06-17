<?php 

ini_set("display_errors" , 1);
ini_set("display_startup_errors" , 1);

error_reporting(E_ALL);

if (isset($_POST['enviar'])) {
    $url = "http://localhost/SkylAb-119/ALQUILARTEMIS-v2/apiRest/controllers/facturas.php?op=insert";

    $data = array(
        'id_cliente' => $_POST['id_cliente'],
        'fecha_salida' => $_POST['fecha_salida'],
        'hora_salida' => $_POST['hora_salida'],
        'subtotal_peso' => $_POST['subtotal_peso'],
        'placa_transporte' => $_POST['placa_transporte'],
        'observaciones' => $_POST['observaciones'],
        'id_empleado' => $_POST['id_empleado']
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

    echo "<script>alert('Datos Guardados correctamente');document.location='facturas'</script>";
}

?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Registrar Factura
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Factura</h1>
        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
    </div>
    <div class="modal-body">
        <form action="" method="post">
        <div class="mb-3">
            <label for="id_cliente" class="form-label">Cliente</label>
            <select class="form-select" name="id_cliente" id="id_cliente" aria-label="Default select example">
                <option selected>Selecciona el tipo de operacion</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            </div>
            <div class="mb-3">
                <label for="fecha_salida" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" >
            </div>
            <div class="mb-3">
                <label for="hora_salida" class="form-label">Hora Salida</label>
                <input type="time" class="form-control" id="hora_salida" name="hora_salida">
            </div>
            <div class="mb-3">
                <label for="subtotal_peso" class="form-label">Subtotal</label>
                <input type="number" class="form-control" id="subtotal_peso" name="subtotal_peso">
            </div>
            <div class="mb-3">
                <label for="placa_transporte" class="form-label">Placa</label>
                <input type="text" class="form-control" id="placa_transporte" name="placa_transporte">
            </div>
            <div class="mb-3">
                <label for="observaciones" class="form-label">Observaciones</label>
                <input type="text" class="form-control" id="observaciones" name="observaciones">
            </div>
            <div class="mb-3">
            <label for="id_empleado" class="form-label">Empleado</label>
            <select class="form-select" name="id_empleado" id="id_empleado" aria-label="Default select example">
                <option selected>Selecciona el tipo de operacion</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            </div>
            <div class="mb-4 row">
              <input type="submit" class="btn btn-primary" value="enviar" name="enviar">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>