<?php

namespace mgcode\assets;

use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

/**
 * @link https://github.com/mg-code/yii2-assets
 * @author Maris Graudins <maris@mg-interactive.lv>
 */
class EnhancedEventsAsset extends AssetBundle
{
    public $sourcePath = '@mgcode/assets/files/enhanced-events';
    public $js = ['enhanced-events.js'];
}