<?php

namespace App\Origin;

use Exception;

class Origin_2
{
    public function excecute(array $form)
    {
        if(isset($form['email'])){
            if (isset($form['salary'])){
                if ($form['age'] >= 25){
                    if($form['sex'] == 'male'){
                        echo "<h1>Bienvenido (Origin)</h1>";
                        exit;
                    }else{
                        throw new Exception( 'Solo requerimo personal hombres' );
                    }
                }else{
                    throw new Exception( 'No cuenta con la edad requerida (Mayor a 24 años)' );
                }
            }else{
                throw new Exception( 'no se encuentra el monto salarial' );
            }
        }else{
            throw new Exception( 'no se encuentra el email' );
        }
    }
}