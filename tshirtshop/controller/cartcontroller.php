<?php

namespace app\tshirtshop\controller;

use app\tshirtshop\core\Controller;

class CartController extends Controller
{

    public function cart()
    {
        
        return $this->render('cart');
    }
}
