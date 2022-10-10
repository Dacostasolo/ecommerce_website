<?php

namespace app\tshirtshop\controller;

use app\tshirtshop\core\Controller;

class SiteController extends Controller
{


    public function home()
    {
        return $this->render('home');
    }

    public function about()
    {
        return $this->render('about');
    }

    public function account()
    {
        return $this->render('account');
    }
}
