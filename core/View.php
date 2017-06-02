<?php
/**
 * Created by PhpStorm.
 * Name: View.php 视图文件
 * User: ken
 * Date: 2016/10/23
 * Time: 上午11:54
 */

namespace core;

class View {

    //模板文件
    protected $file;

    //模板变量
    protected $vars = [];   //php5.4 5.6

    public function make($file) {
        $this->file = "view/" . $file . '.html';
        return $this;
    }

    public function with($name, $value) {
        $this->vars[$name] = $value;
        return $this;
    }

    //魔术方法
    public function __toString() {
        extract($this->vars);
        include "{$this->file}";
        return '';
    }

}