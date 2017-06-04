# yii2-foursquare-authclient

This extension adds Foursquare OAuth2 supporting for [yii2-authclient](https://github.com/yiisoft/yii2-authclient).

[![License](https://poser.pugx.org/isudakoff/yii2-foursquare-authclient/license)](https://packagist.org/packages/isudakoff/yii2-foursquare-authclient)
[![Total Downloads](https://poser.pugx.org/isudakoff/yii2-foursquare-authclient/downloads)](https://packagist.org/packages/isudakoff/yii2-foursquare-authclient)
[![Latest Stable Version](https://poser.pugx.org/isudakoff/yii2-foursquare-authclient/v/stable)](https://packagist.org/packages/isudakoff/yii2-foursquare-authclient)
[![Latest Unstable Version](https://poser.pugx.org/isudakoff/yii2-foursquare-authclient/v/unstable)](https://packagist.org/packages/isudakoff/yii2-foursquare-authclient)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist isudakoff/yii2-foursquare-authclient "*"
```

or add

```json
"isudakoff/yii2-foursquare-authclient": "*"
```

to the `require` section of your composer.json.

## Usage

You must read the yii2-authclient [docs](https://github.com/yiisoft/yii2-authclient/tree/master/docs/guide)

Register your application [in Foursquare](https://foursquare.com/developers/apps)

and add the Foursquare client to your auth clients.

```php
'components' => [
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'foursquare' => [
                'class' => 'isudakoff\authclient\Foursquare',
                'clientId' => 'foursquare_app_id',
                'clientSecret' => 'foursquare_app_secret',
            ],
            // other clients
        ],
    ],
    // ...
]
```