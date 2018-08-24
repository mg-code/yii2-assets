<?php

namespace mgcode\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

/**
 * @link https://github.com/mg-code/yii2-assets
 * @author Maris Graudins <maris.graudins@mg-software.eu>
 */
class BxSliderAsset extends AssetBundle
{
    public $sourcePath = '@bower/bxslider-4/dist';
    public $css = [
        'jquery.bxslider.min.css',
    ];
    public $depends = [
        'mgcode\assets\BxSliderPluginAsset',
    ];
}