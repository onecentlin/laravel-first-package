<?php

namespace Onecentlin\FirstPackage;

class FirstPackage
{
    /*
     * Say Hello
     */
    public static function sayHello($name, $msg = '')
    {
        return "Hello " . $name . ", " . $msg;
    }
}
