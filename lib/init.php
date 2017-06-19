<?php
/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 16.06.2017
 * Time: 17:22
 */

require_once (ROOT.DS.'config'.DS.'config.php');

function __autoload($class_name) {
    $lib_path = ROOT.DS.'lib'.DS.strtolower($class_name).'.class.php';
    $controllers_path = ROOT.DS.'controllers'.DS.
        str_replace('controller', '', strtolower($class_name)).'.controller.php';
//видео - Добавление ключевых классов на 4:46


}