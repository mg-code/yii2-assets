<?php

namespace mgcode\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

/**
 * @link https://github.com/mg-code/yii2-assets
 * @author Maris Graudins <maris.graudins@mg-software.eu>
 */
class BxSliderPluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/bxslider-4/dist';
    public $js = [
        'jquery.bxslider.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();
        if (!file_exists(\Yii::getAlias('@bower/bxslider-4/dist/jquery.bxslider.min.js'))) {
            throw new InvalidConfigException('You must include `bower-asset/bxslider-4` package in your composer.json configuration file.');
        }
    }
}