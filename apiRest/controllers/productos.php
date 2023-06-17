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
    
    /* case 'delete':
        $id = $_GET['id']; // Obtener el identificador de la fila a eliminar
        $resultado = $producto->delete_producto($id); // Llamar a la función de eliminación
        if ($resultado) {
            echo json_encode("Producto eliminado correctamente");
        } else {
            echo json_encode("Error al eliminar el producto");
        }
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