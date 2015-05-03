<?php
/**
 * main.php
 * @author Roman Revin http://phptime.ru
 */

$baseDir = realpath(__DIR__ . '/..');

return [
    'id' => 'testapp',
    'basePath' => $baseDir,
    'aliases' => [
        '@web' => '/',
        '@webroot' => $baseDir . '/runtime',
        '@vendor' => realpath($baseDir . '/../../vendor'),
        '@vendor/rmrevin/yii2-socicon' => realpath($baseDir . '/../..'),
    ]
];