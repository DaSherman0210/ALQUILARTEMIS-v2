<!-- /.card -->
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
                    <th>ID CLIENTE</th>
                    <th>ID EMPLEADO</th>
                    <th>FECHA SALIDA</th>
                    <th>HORA SALIDA</th>
                    <th>SUBTOTAL</th>
                    <th>PLACA</th>
                    <th>OBSERVACIONES</th>
                    <th>DETALLE</th>
                    <th>BORRAR</th>
                    <th>EDITAR</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>ID CLIENTE</th>
                    <th>ID EMPLEADO</th>
                    <th>FECHA SALIDA</th>
                    <th>HORA SALIDA</th>
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
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" >
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora Salida</label>
                <input type="number" class="form-control" id="hora" name="hora">
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