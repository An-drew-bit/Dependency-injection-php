<?php

namespace controllers;

use contracts\{IController, IModel, IStorage};

class ShopController implements IController
{
    protected IModel $model;
    protected IStorage $session;

    public function __construct(IModel $model, IStorage $session)
    {
        $this->model = $model;
        $this->session = $session;

        $this->session->set('test', mt_rand(1, 5));
    }

    public function run()
    {
        $articles = $this->model->all();

        echo '<h1>Home page</h1>';

        foreach($articles as $article) {
            echo "<hr><h2>{$article['title']}</h2>";
        }

        $val = $this->session->get('test');
        echo "<div>That is a dependency injection! {$val}</div>";
    }
}