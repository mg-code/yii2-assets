<?php

namespace mgcode\assets;

use yii\web\AssetBundle;

class HistoryJsAsset extends AssetBundle
{
    public $sourcePath = '@bower/history.js/scripts/bundled/html5';
    public $js = [
        'native.history.js',
    ];
}