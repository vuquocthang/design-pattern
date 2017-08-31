<?php



/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 8/3/2017
 * Time: 3:10 AM
 */

function __autoload($className)
{
    //kiểm tra xem file tồn tại không
    if(file_exists($className . '.php')){
        //Nếu tồn tại thì nhúng file vào.
        include_once $className . '.php';
    }
}



$NsChild = new NsFather();