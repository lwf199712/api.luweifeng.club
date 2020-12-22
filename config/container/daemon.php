<?php
/**
 * 容器注册(只为daemon代码服务)
 * @author weifeng
 */
$containerList = [

];

foreach ($containerList as $class => $definition) {
    Yii::$container->set($class, $definition);
}
