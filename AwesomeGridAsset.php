<?php

namespace mgcode\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

class AwesomeGridAsset extends AssetBundle
{
    public $sourcePath = '@bower/awesome-grid';
    public $js = [
        'awesome-grid.min.js',
    ];

    public function init()
    {
        parent::init();
        if(!file_exists(\Yii::getAlias('@bower/awesome-grid/awesome-grid.min.js'))) {
            throw new InvalidConfigException('You must include `bower-asset/awesome-grid` package in your composer.json configuration file.');
        }
    }
}