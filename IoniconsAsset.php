<?php

namespace mgcode\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

/**
 * @link https://github.com/mg-code/yii2-assets
 * @author Maris Graudins <maris@mg-interactive.lv>
 */
class IoniconsAsset extends AssetBundle
{
    public $sourcePath = '@bower/ionicons';
    public $css = [
        'css/ionicons.min.css',
    ];

    public function init()
    {
        parent::init();
        if(!file_exists(\Yii::getAlias('@bower/ionicons/css/ionicons.min.css'))) {
            throw new InvalidConfigException('You must include `bower-asset/ionicons` package in your composer.json configuration file.');
        }
    }
}