<?php

namespace MVC\core;

class helpers
{
    public static function redirect($path)
    {
        header("LOCATION:" . DOMAIN_NAME . "/" . $path);
    }
    // public static function assets($path)
    // {
    //     return ROOT . "/public/" . $path;
    // }
}
