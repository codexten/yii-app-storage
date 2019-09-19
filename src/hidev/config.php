<?php

return [
    'controllerMap' => [
        'storage-app' => [
            'class' => \codexten\yii\storage\hidev\controllers\StorageAppController::class,
        ],
    ],
    'components' => [
        'include' => [
            __DIR__ . '/goals.yml',
        ],
        'storageApp' => [
            'class' => \hidev\components\Directory::class,
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@hidev/views' => ['@codexten/yii/storage/hidev/views'],
                ],
            ],
        ],
        'vcsignore' => [
            '/public/storage/source/*' => 'storage directories',
            'runtime/storage/*' => 'storage directories',
        ],
    ],
];
