<?php

namespace models;

use contracts\IModel;

class Articles implements IModel
{
    public function all() : array
    {
        return [
            ['id' => '1', 'title' => 'Article from db'],
            ['id' => '2', 'title' => 'Other art from db']
        ];
    }
}