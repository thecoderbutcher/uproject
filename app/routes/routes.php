<?php
    require_once '../app/core/lib/Route.php';

    use Lib\Route;

    Route::get('/', function(){
        echo "hola desde el indes";
    });

    Route::get('/contacto', function(){
        echo "hola desde el contacto";
    });

    Route::dispatch();

?>