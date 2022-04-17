<?php

require_once 'vendor/autoload.php';

use controllers\{HomeController, ShopController};
use models\Articles;
use utils\Session;

$articles = new Articles();
$home = new HomeController($articles);
$session = new Session();
$shop = new ShopController($articles, $session);

$home->run();
$shop->run();