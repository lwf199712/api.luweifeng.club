<?php
/**
 * commands config
 *
 * @author weifeng
 */

use yii\gii\Module;
use yii\log\FileTarget;
use yii\caching\FileCache;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
//定时器容器注册
require_once __DIR__ . '/container/daemon.php';

$config = [
    'id'                  => 'basic-console',
    'basePath'            => dirname(__DIR__),
    'bootstrap'           => ['log'],
    'controllerNamespace' => 'app\commands',
    'aliases'             => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@tests' => '@app/tests',
    ],
    'components'          => [
        'cache' => [
            'class' => FileCache::class,
        ],
        'log'   => [
            'targets' => [
                [
                    'class'  => FileTarget::class,
                    'levels' => ['error', 'warning'],
                ]
            ],
        ],
        'db'    => $db,
    ],
    'params'              => $params,
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => Module::class,
    ];
}

return $config;
