<?php

declare(strict_types=1);


namespace App\Object;


final class Orden
{
    public $cantidad;
    public $precio_unidad;
    public $descuento;

    public function __construct($cantidad, $precio_unidad, $descuento)
    {
        $this->cantidad = $cantidad;
        $this->precio_unidad = $precio_unidad;
        $this->descuento = $descuento;
    }
}