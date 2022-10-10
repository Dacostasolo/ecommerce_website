<?php

namespace app\tshirtshop\controller;

use app\tshirtshop\core\Controller;

class AuthController extends Controller
{

    public function contact()
    {
        return $this->render('contact');
    }
    public function shop()
    {
        return $this->render('shop');
    }
}
