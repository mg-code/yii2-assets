<?php

namespace mgcode\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

/**
 * @link https://github.com/mg-code/yii2-assets
 * @author Maris Graudins <maris@mg-interactive.lv>
 */
class FancyboxAsset extends AssetBundle
{
    public $sourcePath = '@bower/fancybox/dist';
    public $css = [
        'jquery.fancybox.min.css',
    ];
    public $js = [
        'jquery.fancybox.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();
        if (!file_exists(\Yii::getAlias('@bower/fancybox/dist'))) {
            throw new InvalidConfigException('You must include `bower-asset/fancybox` package in your composer.json configuration file.');
        }
    }
}