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
        'fsLocal' => [
            'class' => 'creocoder\flysystem\LocalFilesystem',
            'path' => '@storage/source',
        ],
        'fsAwsS3' => [
            'class' => 'creocoder\flysystem\AwsS3Filesystem',
            'key' => $params['fsAwsS3.key'],
            'secret' => $params['fsAwsS3.secret'],
            'bucket' => $params['fsAwsS3.bucket'],
            'region' => $params['fsAwsS3.region'],
            'endpoint' => $params['fsAwsS3.endpoint'],
            // 'version' => 'latest',
            // 'baseUrl' => 'your-base-url',
            // 'prefix' => 'your-prefix',
            // 'options' => [],
        ],
        'fileStorage' => [
            'class' => '\trntv\filekit\Storage',
            'baseUrl' => '@storageUrl/source',
            'filesystemComponent' => $params['fileStorage.filesystemComponent'],
            'as log' => [
                'class' => 'codexten\yii\storage\behaviors\FileStorageLogBehavior',
                'component' => 'fileStorage',
            ],
        ],
        'urlManagerStorage' => require(__DIR__.'/_urlManager.php'),
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