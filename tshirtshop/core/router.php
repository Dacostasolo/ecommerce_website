<?php

namespace app\tshirtshop\core;

class Router
{

    public  array $array = [];
    public function __construct()
    {
    }


    public function get($path, $callback)
    {
        $this->array['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->array['post'][$path] = $callback;
    }


    public function renderView()
    {
        $path = Application::$app->request->getPath();
        $method = Application::$app->request->getMethod();

        $callback = $this->array[$method][$path] ?? false;

        if ($callback == false) {
            Application::$app->response->getResponseCode(404);
            return "sorry something happened";
        }

        if (is_string($callback)) {

            return $this->render($callback);
        }

        if (is_array($callback)) {

            Application::$app->controller = new $callback[0];
            $callback[0] = Application::$app->controller;

            return call_user_func($callback);
        }


        return  call_user_func($callback);
    }



    private function getLayout()
    {
        ob_start();
        require_once Application::$ROOT_DIR . "/tshirtshop/view/layouts/main.php";
        return ob_get_clean();
    }



    private function getView($view)
    {
        ob_start();
        require_once(Application::$ROOT_DIR . "/tshirtshop/view/$view.php");
        return ob_get_clean();
    }


    public function render($view)
    {
        $layout = $this->getLayout();
        $site = $this->getView($view);

        return str_replace("{content}", $site, $layout);
    }

    public function resolve()
    {
        return $this->renderView();
    }
}
