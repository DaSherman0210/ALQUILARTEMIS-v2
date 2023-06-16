<?php
header('Content-Type: application/json');
require_once("../config/Conectar.php");
require_once("../models/Productos.php");

$producto = new Productos();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos = $producto -> get_producto();
        echo json_encode($datos);
        break;
    /* case 'GetId':
        $datos = $producto->get_cliente_id($body['id']);
        echo json_encode($datos);
        break; */
    case 'insert':
        $datos = $producto->insert_producto(
            $body['nombre'], 
            $body['stock_inicial'], 
            $body['cantidad_ingresos'], 
            $body['cantidad_salidas'],
            $body['fecha_inventario'],
            $body['tipo_operacion']);
        echo json_encode("Insertado correctamente");
        break;
    default:
        echo "Error";
        break;
}

?>