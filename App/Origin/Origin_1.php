<?php

namespace App\Origin;

use App\DB\ApiService;

class Origin_1
{
    public function excecute(): array
    {
        $posts = ApiService::getPosts();

        if (!empty($posts)) {
            $result = [];
            foreach($posts as $post) {
                if (!empty($post['published'])) {
                    $result[] = $post;
                }
            }
        }
        if (!empty($result)) {
            return $result;
        } else {
            return [];
        }

    }
}