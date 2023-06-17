<?php 

ini_set("display_errors" , 1);
ini_set("display_startup_errors" , 1);

error_reporting(E_ALL);

if (isset($_GET['id_producto'])){

    $id = $_POST['id_producto'];

    // URL de la API
    $url = "http://localhost/SkylAb-176/ALQUILARTEMIS-v2/apiRest/controllers/productos.php?op=delete&id=" . $id;

    // Crear la respuesta en formato JSON
    $response = array();

    // Realizar la solicitud DELETE utilizando cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Ejecutar la solicitud y obtener la respuesta
    $result = curl_exec($ch);
    curl_close($ch);

    if ($result) {
        // Si la solicitud se completó con éxito
        $response['success'] = true;
        $response['message'] = "Datos eliminados correctamente";
    } else {
        // Si hubo un error en la solicitud
        $response['success'] = false;
        $response['message'] = "Error al eliminar los datos";
    }

    // Devolver la respuesta en formato JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
    
}
        
?>

