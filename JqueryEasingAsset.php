<?php

namespace mgcode\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

/**
 * @link https://github.com/mg-code/yii2-assets
 * @author Maris Graudins <maris@mg-interactive.lv>
 */
class JqueryEasingAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-easing-original';
    public $js = [
        'jquery.easing.min.js',
    ];

    public function init()
    {
        parent::init();
        if(!file_exists(\Yii::getAlias('@bower/jquery-easing-original/jquery.easing.min.js'))) {
            throw new InvalidConfigException('You must include `bower-asset/jquery-easing-original` package in your composer.json configuration file.');
        }
    }
}