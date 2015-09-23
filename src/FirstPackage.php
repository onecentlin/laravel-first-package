<?php

namespace Onecentlin\FirstPackage;

class FirstPackage
{
    public function __construct()
    {
    }

    /*
     * Say Hello
     */
    public static function sayHello($name, $msg = null)
    {
        if ($msg == null) {
            $msg = 'never give up!';
        }

        return 'Hello '.$name.', '.$msg;
    }
}
