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
See [Dependency list](#dependency-list) section, there are described what dependencies you need to include for every asset.

To add those dependencies either run

```
$ php composer.phar require vendorName/packageName "*"
```

or add

```
"vendorName/packageName": "*"
```

to the ```require``` section of your `composer.json` file.

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

### Dependency list
**Awesome Grid**
```
"bower-asset/awesome-grid": "*"
```
**History.js**
```
"bower-asset/history.js": "*"
```
**jQuery.browser**
```
"bower-asset/jquery.browser": "*"
```
**Sly**
```
"bower-asset/sly": "*"
```
**Sticky**
```
"bower-asset/sticky": "*"
```
