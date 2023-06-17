<?php
header('Content-Type: application/json');
require_once("../config/Conectar.php");
require_once("../models/Empleados.php");

$empleado = new Empleados();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos = $empleado -> get_empleado();
        echo json_encode($datos); 
        break;
    /* case 'GetId':
        $datos = $camper->get_cliente_id($body['id']);
        echo json_encode($datos);
        break; */
    case 'insert':
        $datos = $empleado->insert_empleado(
            $body['nombres'], 
            $body['direccion'], 
            $body['telefono'], 
            $body['email']);
        echo json_encode("Insertado correctamente");
        break;
    default:
        echo "Error";
        break;
}

?>