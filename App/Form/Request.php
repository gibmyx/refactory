<?php

declare(strict_types=1);

namespace App\Form;

final class Request
{
    public function getFormRequestMale()
    {
        return [
            'name' => 'Gibmyx',
            'age' => 25,
            'city' => "carupano",
            'sex' => "male",
            'salary' => 5000,
            'email' => "gibmyx@gmail.com"
        ];
    }

    public function getFormRequestFemale()
    {
        return [
            'name' => 'Katherine',
            'age' => 22,
            'city' => "Panama",
            'sex' => "male",
            'salary' => 3500,
            'email' => "katherine@gmail.com"
        ];
    }

    public function getFormRequestError()
    {
        return [
            'name' => 'Dayanna',
            'age' => 30,
            'city' => "Cumana",
            'salary' => 3500,
        ];
    }

}