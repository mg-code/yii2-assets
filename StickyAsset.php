<?php

namespace mgcode\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

class StickyAsset extends AssetBundle
{
    public $sourcePath = '@bower/sticky';
    public $js = [
        'jquery.sticky.js',
    ];

    public function init()
    {
        parent::init();
        if(!file_exists(\Yii::getAlias('@bower/sticky/jquery.sticky.js'))) {
            throw new InvalidConfigException('You must include `bower-asset/sticky` package in your composer.json configuration file.');
        }
    }
}