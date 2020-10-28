<?php
require_once 'vendor/autoload.php';


use App\Origin\Origin_1;


//Ejercicio 1
$origin_1 = new Origin_1();
$post = $origin_1->excecute();
echo "<h1>Posts Publicados " . count($post) ."</h1>";
echo var_dump($post);
exit;