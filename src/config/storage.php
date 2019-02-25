<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 9/6/18
 * Time: 10:33 PM
 */

return [
    'runtimePath' => '@root/runtime/storage',
    'controllerNamespace' => 'codexten\yii\storage\controllers',
    'controllerMap' => [
        'glide' => '\trntv\glide\controllers\GlideController',
    ],
    'components' => [
        'urlManager' => require(__DIR__ . '/_urlManager.php'),
        //TODO : TBD
//        'request' => [
//            'enableCsrfCookie' => true, /// XXX TO BE DISABLED
//            'cookieValidationKey' => $params['cookieValidationKey'],
//        ],
//        'errorHandler' => [
//            'errorAction' => 'site/error',
//        ],
//        'urlManager' => [
//            'class' => \yii\web\UrlManager::class,
//            'enablePrettyUrl' => true,
//            'showScriptName' => false,
//            'enableStrictParsing' => false,
//        ],
//        'i18n' => [
//            'class' => \yii\i18n\I18N::class,
//            'translations' => [
//                'codexten:yii:web' => [
//                    'class' => \yii\i18n\PhpMessageSource::class,
//                    'basePath' => '@codexten/yii/web/messages',
//                ],
//            ],
//        ],
//        'view' => [
//            'theme' => [
//                'pathMap' => [
//                    '@app/views' => [
//                        '@codexten/yii/web/views',
//                    ],
//                ],
//            ],
//        ],
    ],
];