<?php

declare(strict_types=1);

namespace App\Origin;

class Origin_3
{
    public function execute($orden_cantidad, $orden_precio, $orden_descuento, $cargo_impuesto, $cargo_envio)
    {
        $precio = $orden_cantidad * $orden_precio;
        $precio = $precio - $orden_descuento;
        $precio = $precio + $cargo_envio;
        $precio_total = $precio *  (1 + $cargo_impuesto / 100);
        return $precio_total;
    }

}