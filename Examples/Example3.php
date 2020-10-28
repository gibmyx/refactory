<?php

use App\Object\Cargo;
use App\Object\Orden;
use App\Origin\Origin_3;
use App\Refactory\Refactory_3;


//Example 3, Origin
$orden_cantidad = 5;
$orden_precio_unidad = 500;
$orden_descuento = 80;
$cargo_impuesto = 0.9;
$cargo_envio = 50;

$precioTotal = (new Origin_3())->execute($orden_cantidad, $orden_precio_unidad, $orden_descuento, $cargo_impuesto, $cargo_envio);
echo "Precio total: ". $precioTotal . " (Origin)";
exit;

//Example 3, Refactory
$orden = new Orden(5, 500, 80);
$cargo = new Cargo(0.9, 50);
$precioTotal = (new Refactory_3($orden, $cargo))->execute();
echo "Precio total: ". $precioTotal . " (Refactory)";
exit;






