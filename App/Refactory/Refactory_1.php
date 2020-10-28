<?php

namespace App\Refactory;

use App\DB\ApiService;

class Refactory_1
{
    public function execute(): array
    {
        return array_filter(
            $this->getPosts(), function ($post) {
                return !empty($post['published']);
            });
    }

    protected function getPosts() : array
    {
        return ApiService::getPosts();
    }

}