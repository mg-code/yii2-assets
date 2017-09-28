<?php

namespace mgcode\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

/**
 * @link https://github.com/mg-code/yii2-assets
 * @author Maris Graudins <maris.graudins@mg-software.eu>
 */
class CoreJsTypeAheadAsset extends AssetBundle
{
    public $sourcePath = '@bower/corejs-typeahead/dist';
    public $js = [
        'typeahead.bundle.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    public function init()
    {
        parent::init();
        if (!file_exists(\Yii::getAlias('@bower/corejs-typeahead/dist/typeahead.bundle.min.js'))) {
            throw new InvalidConfigException('You must include `bower-asset/corejs-typeahead` package in your composer.json configuration file.');
        }
    }
}