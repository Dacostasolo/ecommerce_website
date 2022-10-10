<?php

namespace app\tshirtshop\core;

class Application
{
    public Router $router;
    public Request $request;
    public Controller $controller;
    public Response $response;
    static Application $app;
    static string $ROOT_DIR;


    public function __construct($ROOT_DIR)
    {

        $this->router = new Router();
        $this->request = new Request();
        $this->response = new Response();

        self::$app = $this;
        self::$ROOT_DIR = $ROOT_DIR;
    }

    public function run()
    {

        //  echo var_dump($this->router->array);
        // exit;

        echo $this->router->resolve();
    }
}
