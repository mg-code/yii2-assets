yii2-assets
========
Yii2 asset collection of useful JavaScript libraries.

Below are instructions how to use assets.

You must include dependencies in your composer.json for all assets that you want to use. 
This is due to prevent loading dependency packages for assets that you don't need. (See [Install dependencies](#install-dependencies))

### Install

Either run

```
$ php composer.phar require mg-code/yii2-assets "@dev"
```

or add

```
"mg-code/yii2-assets": "@dev"
```

to the ```require``` section of your `composer.json` file.

### Install dependencies 

### Usage
There are two ways how to use assets.

Either register it in view. 
```php
\mgcode\assets\AwesomeGridAsset::register($this);
```

Either add it as dependency to your asset
```php
namespace app\assets;
use yii\web\AssetBundle;

class MyAsset extends AssetBundle
{
    ...
    public $depends = [
        'mgcode\assets\AwesomeGridAsset',
    ];
}
```
Replace AwesomeGridAsset with desired asset.

### Awesome Grid
```
"bower-asset/awesome-grid": "*"
```
