<?php

namespace mgcode\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

class HistoryJsAsset extends AssetBundle
{
    public $sourcePath = '@bower/history.js/scripts/bundled/html5';
    public $js = [
        'native.history.js',
    ];

    public function init()
    {
        parent::init();
        if(!file_exists(\Yii::getAlias('@bower/history.js/scripts/bundled/html5/native.history.js'))) {
            throw new InvalidConfigException('You must include `bower-asset/history.js` package in your composer.json configruation file.');
        }
    }
}