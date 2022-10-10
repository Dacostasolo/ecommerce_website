<?php

namespace app\tshirtshop\controller;

use app\tshirtshop\core\Controller;

class DetailController extends Controller
{
    public function detail()
    {
        return $this->render('detail');
    }
}
