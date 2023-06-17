<?php
// Obtener la ruta
$route = $_SERVER['REQUEST_URI'];

// Dividir la ruta en segmentos
$segments = explode('/', $route);

// Obtener el primer segmento después del dominio o localHoost (cambiar)
$firstSegment = isset($segments[2]) ? $segments[2] : '';

// Definir las acciones basadas en el primer segmento
switch ($firstSegment) {
    case '': require __DIR__ . '/index.php';
        break;
    case 'ciudades':
        // Obtener el segmento dinámico después de "/equipos/"
        $dynamicSegment = isset($segments[3]) ? $segments[3] : '';

        // Acciones basadas en el segmento dinámico
            require_once  __DIR__ . '/ciudades/ciudad.php';
      
        break;

    default:
        // Ruta no encontrada
        echo "Error 404: Ruta no encontrada ";
        break;
}
// Función para obtener la publicación por slug (simulada)

