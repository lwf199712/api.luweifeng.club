<?php declare(strict_types=1);


use Workerman\Lib\Timer;
use Workerman\Worker;
use yii\base\InvalidConfigException;

//TODO 开发环境调试,上线记得将此调试关闭!!!
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
$config = require __DIR__ . '/config/daemon.php';

try {
    $application = new yii\console\Application($config);
} catch (InvalidConfigException $e) {
    exit;
}

//启动定时器
$worker = new Worker('tcp://0.0.0.0:8585');
$worker->count = 1;
$worker->onWorkerStart = static function ($worker) {
    Timer::add(10, static function()
    {
        ConversionProcess::start();
    });
    Timer::add(1, static function()
    {
        ConversionProcess::start();
    });
};
// 运行worker
Worker::runAll();
