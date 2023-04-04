<?php

namespace App;

class RequestHandler
{
    public function __construct()
    {

    }

    public static function get()
    {
        return 'GET works';
    }

    public static function post()
    {
        return 'POST works';
    }
}