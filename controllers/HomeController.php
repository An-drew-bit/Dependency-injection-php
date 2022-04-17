<?php

namespace controllers;

use contracts\{IController, IModel};

class HomeController implements IController
{
    protected IModel $model;

    public function __construct(IModel $model)
    {
        $this->model = $model;
    }

    public function run()
    {
        $articles = $this->model->all();

        echo '<h1>Home page</h1>';

        foreach($articles as $article) {
            echo "<hr><h2>{$article['title']}</h2>";
        }
    }
}