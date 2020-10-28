<?php

declare(strict_types=1);

namespace App\Refactory;

use App\Object\Cargo;
use App\Object\Orden;

class Refactory_3
{
    private $orden;
    private $cargo;
    private $totalPrice;

    public function __construct(Orden $orden, Cargo $cargo)
    {
        $this->orden = $orden;
        $this->cargo = $cargo;
    }

    public function execute(): float
    {
        return $this->applyCantidad()
            ->applyDescuento()
            ->applyEnvio()
            ->applyImpuesto();
    }

    private function applyCantidad(): self
    {
        $this->totalPrice = $this->orden->cantidad * $this->orden->precio_unidad;
        return $this;
    }

    private function applyDescuento(): self
    {
        $this->totalPrice -= $this->orden->descuento;
        return $this;
    }

    private function applyEnvio(): self
    {
        $this->totalPrice += $this->cargo->envio;
        return $this;
    }

    private function applyImpuesto(): float
    {
        return $this->totalPrice *=  (1 + $this->cargo->impuesto / 100);
    }
}