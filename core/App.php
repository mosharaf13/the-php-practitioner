<?php

class App
{
    protected static $registry = [];

    public static function bind($key, $value)
    {
        Static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if (!array_key_exists($key, Static::$registry)){
            throw new Exception("No {$key} is bound in the container.");
        }
        return Static::$registry[$key];
    }
}