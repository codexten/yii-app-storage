<?php

namespace codexten\yii\storage\components;

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use trntv\filekit\filesystem\FilesystemBuilderInterface;

/**
 * Class LocalFilesystemBuilder
 *
 * @package codexten\yii\storage\components
 */
class LocalFilesystemBuilder implements FilesystemBuilderInterface
{
    /**
     * @var string file storage path
     */
    public $path;

    /**
     * @return Filesystem|mixed
     */
    public function build()
    {
        $adapter = new Local(\Yii::getAlias($this->path));

        return new Filesystem($adapter);
    }
}