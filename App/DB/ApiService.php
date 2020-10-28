<?php

declare(strict_types=1);

namespace App\DB;

final class ApiService
{
    public function getPosts(): array
    {
        return [
            ['id' => 1, 'nombre' =>  'post', 'descripcion' => 'probado', 'published' => true],
            ['id' => 2, 'nombre' =>  'post', 'descripcion' => 'probado', 'published' => false],
            ['id' => 3, 'nombre' =>  'post', 'descripcion' => 'probado', 'published' => true],
            ['id' => 4, 'nombre' =>  'post', 'descripcion' => 'probado', 'published' => false],
            ['id' => 5, 'nombre' =>  'post', 'descripcion' => 'probado', 'published' => true],
            ['id' => 6, 'nombre' =>  'post', 'descripcion' => 'probado', 'published' => false],
        ];
    }
}