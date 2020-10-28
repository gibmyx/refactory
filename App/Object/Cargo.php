<?php

declare(strict_types=1);

namespace App\Object;

final class Cargo
{
    public $impuesto;
    public $envio;

    public function __construct($impuesto, $envio)
    {
        $this->impuesto = $impuesto;
        $this->envio = $envio;
    }

}