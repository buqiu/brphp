<?php

/**
 * Created by PhpStorm.
 * Name:
 * User: ken
 * Date: 2016/10/21
 * Time: 上午11:44
 */

namespace core;

class Bootstrap {

    /**
     * 启动方法
     */
    public static function run() {
        session_start();
        self::parseUrl();
    }

    public static function parseUrl() {
        if (isset($_GET['s'])) {
            //分析s变量生产控制器方法
            $info = explode('/', $_GET['s']);
            $class = '\app\home\controllers\\' . ucfirst($info[1]);
            $action = $info[2];
        } else {
            $class = '\app\home\controllers\Index';
            $action = "show";
        }
        echo (new $class)->$action();
    }

}