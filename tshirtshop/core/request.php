<?php

namespace app\tshirtshop\core;

class Request
{

    public function getMethod()
    {

        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getPath()
    {

        $url = $_SERVER['REQUEST_URI'];
        $pos = strpos($url, '?') ?? false;
        $path = $pos !== false ? substr($url, 0, $pos) : $url;

        // echo $path;
        return $path;
    }
}
