<?php

namespace app\tshirtshop\core;

class Controller
{


    public function render($view)
    {
        return Application::$app->router->render($view);
    }
}
