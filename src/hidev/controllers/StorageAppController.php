<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 29/7/18
 * Time: 5:38 PM
 */

namespace codexten\yii\storage\hidev\controllers;

/**
 * Class storageAppController
 *
 * @package codexten\yii\storage\hidev\controllers
 */
class StorageAppController extends \hidev\base\Controller
{
    public $defaultAction = 'deploy';

    public function actionDeploy()
    {
        return $this->take('storageApp')->save();
    }
}