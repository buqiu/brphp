<?php
/**
 * Created by PhpStorm.
 * Name: 系统函数库
 * User: ken
 * Date: 2016/10/21
 * Time: 下午1:10
 */

/**
 * 打印数据
 * @param $data
 */
function dd($data) {
    echo "<pre>" . print_r($data, true) . "</pre>";
}