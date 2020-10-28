<?php

namespace App\Refactory;

use Exception;

class Refactory_2
{
    private $form;

    public function __construct(array $form)
    {
        $this->form = $form;
    }

    public function execute()
    {
        if(!isset($this->form['email']))
            throw new Exception( 'no se encuentra el email' );

        if(!isset($this->form['salary']))
            throw new Exception( 'no se encuentra el monto salarial' );

        if(!($this->form['age'] >= 25 ))
            throw new Exception( 'No cuenta con la edad requerida (Mayor a 24 años)' );

        if(!($this->form['sex'] == 'male'))
            throw new Exception( 'No cuenta con la edad requerida (Mayor a 24 años)' );

        echo "<h1>Bienvenido (Refactory)</h1>";
        exit;
    }

}