<?php

namespace app\tshirtshop\controller;

use app\tshirtshop\core\Controller;

class CheckoutController extends Controller
{


    public function checkout()
    {
        return $this->render('checkout');
    }
}
