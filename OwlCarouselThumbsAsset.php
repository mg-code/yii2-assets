<?php

namespace mgcode\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

/**
 * @link https://github.com/mg-code/yii2-assets
 * @author Maris Graudins <maris@mg-interactive.lv>
 */
class OwlCarouselThumbsAsset extends AssetBundle
{
    public $sourcePath = '@bower/owl.carousel2.thumbs/dist';
    public $js = [
        'owl.carousel2.thumbs.min.js',
    ];
    public $depends = [
        'mgcode\assets\OwlCarouselScriptAsset',
    ];

    public function init()
    {
        parent::init();
        if(!file_exists(\Yii::getAlias('@bower/owl.carousel2.thumbs/dist/owl.carousel2.thumbs.min.js'))) {
            throw new InvalidConfigException('You must include `bower-asset/owl.carousel` package in your composer.json configuration file.');
        }
    }
}