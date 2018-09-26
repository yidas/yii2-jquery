<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="60px">
    </a> &nbsp; 
    <a href="https://jquery.com" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/JQuery_logo.svg/220px-JQuery_logo.svg.png" height="50px">
    </a>
    <!--
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a> 
    -->
    <h1 align="center">jQuery Extension for Yii 2 </h1>
    <br>
</p>

jQuery Asset Bundle extension with fixed and CDN sources for Yii2 framework

[![Latest Stable Version](https://poser.pugx.org/yidas/yii2-jquery/v/stable?format=flat-square)](https://packagist.org/packages/yidas/yii2-jquery)
[![Latest Unstable Version](https://poser.pugx.org/yidas/yii2-jquery/v/unstable?format=flat-square)](https://packagist.org/packages/yidas/yii2-jquery)
[![License](https://poser.pugx.org/yidas/yii2-jquery/license?format=flat-square)](https://packagist.org/packages/yidas/yii2-jquery)

This is the [jQuery](https://jquery.com/) extension for [Yii framework 2.0](http://www.yiiframework.com/). It provides fixed and CDN [jQuery](https://github.com/jquery/jquery) distribution assets and thus makes using jQuery in Yii applications extremely easy.

---


INSTALLATION
------------

The preferred install way is through [Composer](http://getcomposer.org/download/):

```
composer require yidas/yii2-jquery
```

Or you could edit `composer.json` with adding package in require section then run `composer update`.

```
"yidas/yii2-jquery": "~2.0.0"
```

---

CONFIGURATION
-------------

Register or depend Asset into your application:

```php
yidas\yii\jquery\JqueryAsset
```
    
For example, to register jQuery assets in view :

```php
\yidas\yii\jquery\JqueryAsset::register($this);
```
    
Or as dependency in your app asset bundle :    

```php
namespace app\assets;
use yii\web\AssetBundle;
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yidas\yii\jquery\JqueryAsset'
    ];
}
```

### Version Control

This extension includes fixed distribution assets for choosing existing version of jQuery, set the version by configuring `config` file:

```php
'components' => [
    'assetManager' => [
        'bundles' => [
            'yidas\yii\jquery\JqueryAsset' => [
                'version' => '2.2.4',
            ],
        ],
    ],
],
```


### CDN Asset Mode

You could switch Asset to use CDN distribution by configuring `config` file:

```php
'components' => [
    'assetManager' => [
        'bundles' => [
            'yidas\yii\jquery\JqueryAsset' => [
                'cdnVersion' => '2.2.4',
                'cdn' => true,
            ],
        ],
    ],
],
```

#### Specify a CDN source

You could also specify CDN source you like:

```php
'components' => [
    'assetManager' => [
        'bundles' => [
            'yidas\yii\jquery\JqueryAsset' => [
                'cdn' => true,
                'cdnJS' => ['https://code.jquery.com/jquery-2.2.4.min.js'],
            ],
        ],
    ],

],
```
    
    
    
