<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'quartronic' => [
            'class' => '\quarsintex\yii2\quartronic\Quartronic',
            'webDir' => __DIR__.'/../../frontend/web/admin/',
            'webPath' => '/admin/quartronic/',
            'subWebPath' => '/quartronic',
            'runtimeDir' => __DIR__.'/../runtime/',
        ],
    ],
];
