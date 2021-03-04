<?php

try{
    $conexion = new PDO('mysql:host=localhost;dbname=articulo', 'root', '');
}catch (Exception $e){
    echo "Error". $e->getMessage();
    die();
}

