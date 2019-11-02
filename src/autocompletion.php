<?php

use trntv\filekit\Storage;
use trntv\glide\components\Glide;
use yii\web\UrlManager;

/**
 * @property UrlManager $urlManagerStorage
 * @property Glide $glide
 * @property Storage $fileStorage
 */
abstract class BaseApplication extends yii\base\Application
{
}