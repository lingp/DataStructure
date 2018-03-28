<?php
/**
 * 自动加载类
 * Date: 2018-03-07
 * Time: 10:47
 */
class Loader
{

    public static function autoload($class)
    {
        $file = ROOT . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
        if(file_exists($file))
        {
            require_once ($file) ;
        }
    }
}