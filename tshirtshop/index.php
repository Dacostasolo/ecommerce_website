
<?php

$ROOT_DIR =  dirname(__DIR__);
require $ROOT_DIR . '/vendor/autoload.php';

use app\tshirtshop\controller\AuthController;
use app\tshirtshop\controller\CartController;
use app\tshirtshop\controller\CheckoutController;
use app\tshirtshop\controller\DetailController;
use app\tshirtshop\controller\SiteController;
use app\tshirtshop\core\Application;

$app = new Application($ROOT_DIR);

$app->router->get("/ecommerce", [SiteController::class, 'home']);

$app->router->get('/ecommerce/shop', [AuthController::class, 'shop']);

$app->router->get('/ecommerce/categories', fn () => "Categories");

$app->router->get('/ecommerce/about', [SiteController::class, 'about']);

$app->router->get('/ecommerce/detail', [DetailController::class, 'detail']);

$app->router->get('/ecommerce/contact', [AuthController::class, 'contact']);

$app->router->get('/ecommerce/account', fn () => "Account Details");

$app->router->get('/ecommerce/cart', [CartController::class, 'cart']);

$app->router->get('/ecommerce/checkout', [CheckoutController::class, 'checkout']);

$app->router->get('/ecommerce/register', fn () => "Register");

$app->router->get('/ecommerce/login', fn () => "Login");


$app->run();
