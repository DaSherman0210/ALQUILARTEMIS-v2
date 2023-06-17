<?php
header('Content-Type: application/json');
require_once("../config/Conectar.php");
require_once("../models/Devoluciones.php");

$empleado = new Devoluciones();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos = $empleado -> get_devolucion();
        echo json_encode($datos); 
        break;
    case 'GetId':
        $datos = $camper->get_id_devoluciones($body['id']);
        echo json_encode($datos);
        break;
    /* case 'insert':
        $datos = $camper->insert_cliente($body['nombre'], $body['telefono'], $body['correo'], $body['documento'], $body['tipo_documento'], $body['tipo_cliente']);
        echo json_encode("Insertado correctamente");
        break; */
    default:
        echo "No entra";
        break;
}

?>