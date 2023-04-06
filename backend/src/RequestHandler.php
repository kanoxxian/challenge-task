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

    public static function getUsers()
    {
        return (new Users())->getUsers();
    }

    public static function post($data)
    {
        return $data ? 'POST works and data was received - ' . json_encode($data) : 'No data provided';
    }
}