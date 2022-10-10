<?php

namespace app\tshirtshop\core;

class Response
{


    public function getResponseCode($code)
    {
        http_response_code($code);
    }
}
