<?php

/**
 * Created by PhpStorm.
 * Name: Index.php 首页控制器
 * User: ken
 * Date: 2016/10/20
 * Time: 下午9:07
 */

namespace app\home\controllers;

use core\View;
use Gregwar\Captcha\CaptchaBuilder;

class Index {

    public function __construct() {
        $this->view = new View();
    }

    /**
     * 显示首页
     */
    public function show() {
        return $this->view->make('home/index/index')->with('version', '版本:1.0 copyright:涂牛网');
    }

    /**
     * 显示登录页
     */
    public function login() {
        return $this->view->make('home/index/login');
    }
    
    /**
     * 验证码
     */
    public function code() {
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder();
        $builder->build();
        $builder->output();
    }

}