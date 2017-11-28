<?php

namespace mgcode\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

/**
 * @link https://github.com/mg-code/yii2-assets
 * @author Maris Graudins <maris@mg-interactive.lv>
 */
class JqueryFileUploadAsset extends AssetBundle
{
    public $sourcePath = '@bower/blueimp-file-upload';
    public $css = [
        'css/jquery.fileupload.css'
    ];
    public $js = [
        'js/vendor/jquery.ui.widget.js',
        'js/jquery.iframe-transport.js',
        'js/jquery.fileupload.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();
        if (!file_exists(\Yii::getAlias('@bower/blueimp-file-upload/js/jquery.fileupload.js'))) {
            throw new InvalidConfigException('You must include `bower-asset/blueimp-file-upload` package in your composer.json configuration file.');
        }
    }
}