<?php

/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 16.06.2017
 * Time: 16:49
 */
class Config
{
    protected static $settings = array();

    public static function get($key) {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }

    public static function set($key, $value) {
        self::$settings[$key] = $value;
    }

}