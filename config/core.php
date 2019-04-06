<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 9/6/18
 * Time: 3:30 PM
 */

/* @var $params array */

return [
    'aliases' => [
        '@storageUrl' => $params['app.storage.url'],
        '@storage' => '@root/public/storage',
    ],
    'components' => [
        'fileStorage' => [
            'class' => '\trntv\filekit\Storage',
            'baseUrl' => '@storageUrl/source',
            'filesystem' => [
                'class' => 'codexten\yii\storage\components\LocalFilesystemBuilder',
                'path' => '@storage/source',
            ],
            'as log' => [
                'class' => 'codexten\yii\storage\behaviors\FileStorageLogBehavior',
                'component' => 'fileStorage',
            ],
        ],
        'urlManagerStorage' => require(__DIR__ . '/_urlManager.php'),
        'glide' => [
            'class' => 'trntv\glide\components\Glide',
            'sourcePath' => '@root/public/storage/source',
            'cachePath' => '@root/runtime/storage/cache',
            'urlManager' => 'urlManagerStorage',
            'maxImageSize' => '4000000',
//            'signKey' => 'Ud7pwin4lFIHQpSe_ND8mWpafe5K7dej',
            'signKey' => false,
        ],

    ],
];