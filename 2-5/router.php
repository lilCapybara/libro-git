<?php
require_once '2-5.php';
require_once 'funciones.php';


// el router va a leer la action desde el paramtro "action"

$action = 'home'; // accion por defecto
if (!empty( $_GET['limite'])) {
    $action = $_GET['limite'];
}

// parsea la accion Ej: noticia/1 --> ['noticia', 1]
$params = explode('/', $action);



switch ($params[0]) { // en la primer posicion tengo la accion real
    case '5':
        armarTabla(5);
        break;

    case '10':
        armarTabla(10);
        break;

    case '20':
        armarTabla(20);
        break;
    
    default:
        echo "<h1>ERROR 404</h1>";
        break;
    }

?>