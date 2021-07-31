<?php 
    echo 'Versión actual de PHP: ' . phpversion();

    // Imprime ejemplo '2.0' o nada si la extensión no está habilitada
    echo phpversion('tidy');
?>