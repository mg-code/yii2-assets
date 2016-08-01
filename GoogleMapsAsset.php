<?php

namespace mgcode\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

/**
 * @link https://github.com/mg-code/yii2-assets
 * @author Maris Graudins <maris@mg-interactive.lv>
 */
class GoogleMapAsset extends AssetBundle
{
    public function init()
    {
        parent::init();
        $this->js[] = '//maps.googleapis.com/maps/api/js?v=3.exp&language=' . \Yii::$app->language;
    }
}