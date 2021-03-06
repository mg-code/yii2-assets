yii2-assets
========
Yii2 asset collection of useful JavaScript libraries.

Below are instructions how to use assets.

You must include dependencies in your composer.json for all assets (see [Assets](#assets) section) that you want to use. 
This is due to prevent loading dependency packages for assets that you don't need.

Assets:
* [Awesome Grid](#awesome-grid)
* [BxSlider](#bxslider)
* [History.js](#historyjs)
* [Intl.js](#intljs)
* [Ionicons](#ionicons)
* [jQuery.browser](#jquerybrowser)
* [jQuery Serialize Object](#jquery-serialize-object)
* [JavaScript Cookie](#javascript-cookie)
* [Sly](#sly)
* [Sticky](#sticky)
* [Owl Carousel](#owl-carousel)
* [Owl Carousel 2 Thumbnails](#owl-carousel-2-thumbnails)
* [Are You Sure?](#are-you-sure)
* [Bootstrap Tabdrop](#bootstrap-tabdrop)
* [Autobahn JS](#autobahn-js)
* [Seiyria Bootstrap Slider](#seiyria-bootstrap-slider)
* [Highcharts](#highcharts)
* [messageformat.js](#messageformatjs)
* [Fancybox](#fancybox)
* [Enhanced Events](#enhanced-events)
* [ReactJS](#reactjs)
* [Single Page Nav](#single-page-nav)
* [jQuery Easing](#jquery-easing)
* [CoreJS TypeAhead](#corejs-typeahead)
* [jQuery File Upload](#jquery-file-upload)

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
See [Assets](#assets) section, there are described what dependencies you need to include for every asset.

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
Replace AwesomeGridAsset with desired asset. (See [Assets](#assets) section)

Assets
======
### Awesome Grid
Asset:
```
mgcode\assets\AwesomeGridAsset
```
Dependencies: 
```
"bower-asset/awesome-grid": "*"
```
### BxSlider
Assets:
```
mgcode\assets\BxSliderAsset
mgcode\assets\BxSliderPluginAsset
```
Dependencies: 
```
"bower-asset/bxslider-4": "*"
```
### History.js
Asset:
```
mgcode\assets\HistoryJsAsset
```
Dependencies: 
```
"bower-asset/history.js": "*"
```
### Intl.js
Main asset:
```
mgcode\assets\IntlJsAsset
```
Locale Asset:
```
mgcode\assets\IntlJsLocaleAsset
```
By default `IntlJsLocaleAsset` uses locale defined in Formatter configuration.
If you want to override it you can define it in application `params` section:

```php
return [
    ..... application configuration ....
    'params' => [
        'intlJsLocale' => 'en-US',
        ...
    ]
];
```
Dependencies:
```
"bower-asset/intl": "*"
```
### Ionicons
Asset:
```
mgcode\assets\IoniconsAsset
```
Dependencies: 
```
"bower-asset/ionicons": "*"
```
### jQuery.browser
Asset:
```
mgcode\assets\JqueryBrowserAsset
```
Dependencies: 
```
"bower-asset/jquery.browser": "*"
```
### jQuery Serialize Object
Asset:
```
mgcode\assets\JquerySerializeObjectAsset
```
Dependencies:
```
"bower-asset/jquery-serialize-object": "~2"
```
### JavaScript Cookie
Asset:
```
mgcode\assets\JsCookieAsset
```
Dependencies:
```
"bower-asset/js-cookie": "~2"
```
### Sly
Asset:
```
mgcode\assets\SlyAsset
```
Dependencies: 
```
"bower-asset/sly": "*"
```
### Sticky
Asset:
```
mgcode\assets\StickyAsset
```
Dependencies: 
```
"bower-asset/sticky": "*"
```
### Owl Carousel
Asset for JS && CSS files:
```
mgcode\assets\OwlCarouselAsset
```
Asset for JS file:
```
mgcode\assets\OwlCarouselScriptAsset
```
Dependencies: 
```
"bower-asset/owl.carousel": "*"
```
### Owl Carousel 2 Thumbnails
Asset for JS && CSS files:
```
mgcode\assets\OwlCarouselThumbsAsset
```
Dependencies: 
```
"bower-asset/owl.carousel2.thumbs": "*"
```
### Are You Sure?
Asset:
```
mgcode\assets\AreYouSureAsset
```
Dependencies: 
```
"bower-asset/jquery.are-you-sure": "*"
```
### Bootstrap Tabdrop
Asset:
```
mgcode\assets\BootstrapTabdropAsset
```
### Autobahn JS
0.8.2 is the last version of Autobahn|JS that supports version 1 of WAMP.

Please read documentation here: [http://autobahn.ws/js/reference_wampv1.html](http://autobahn.ws/js/reference_wampv1.html)

Asset:
```
mgcode\assets\AutobahnJsAsset
```
### Seiyria Bootstrap Slider
Asset:
```
mgcode\assets\SeiyriaBootstrapSliderAsset
```
Dependencies: 
```
"bower-asset/seiyria-bootstrap-slider": "9.*"
```
### Highcharts
Asset:
```
mgcode\assets\HighchartsAsset
```
Dependencies: 
```
"bower-asset/highcharts-release": "*"
```
### messageformat.js
Asset:
```
mgcode\assets\MessageFormatAsset
```
Dependencies: 
```
"bower-asset/messageformat": "*"
```
### Fancybox
Asset:
```
mgcode\assets\FancyboxAsset
```
Dependencies: 
```
"bower-asset/fancybox": "*"
```
### Enhanced Events
Adds document scrollEnd event.
Asset:
```
mgcode\assets\EnhancedEventsAsset
```
### ReactJS
Asset:
```
mgcode\assets\ReactAsset
mgcode\assets\ReactDomAsset
```
Dependencies: 
```
"bower-asset/react": "*"
```
### Single Page Nav
Version 1.2.1 supported.

Asset:
```
mgcode\assets\SinglePageNavAsset
```
### jQuery Easing
Asset:
```
mgcode\assets\JqueryEasingAsset
```
Dependencies: 
```
"bower-asset/jquery-easing-original": "*"
```
### CoreJs TypeAhead
Asset:
```
mgcode\assets\CoreJsTypeAheadAsset
```
Dependencies: 
```
"bower-asset/corejs-typeahead": "*"
```
### jQuery File Upload
Asset:
```
mgcode\assets\JqueryFileUploadAsset
```
Dependencies: 
```
"bower-asset/blueimp-file-upload": "*"
```
