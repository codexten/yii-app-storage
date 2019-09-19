<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 11/2/19
 * Time: 3:03 PM
 */

return [
    'class' => \codexten\yii\storage\web\UrlManager::class,
    'baseUrl' => '@storageUrl',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        ['pattern' => 'cache/<path:(.*)>', 'route' => 'glide/index', 'encodeParams' => false],
    ],
];