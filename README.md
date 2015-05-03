Yii 2 Socicon Asset Bundle
===============================
[![License](https://poser.pugx.org/rmrevin/yii2-socicon/license.svg)](https://packagist.org/packages/rmrevin/yii2-socicon)
[![Latest Stable Version](https://poser.pugx.org/rmrevin/yii2-socicon/v/stable.svg)](https://packagist.org/packages/rmrevin/yii2-socicon)
[![Latest Unstable Version](https://poser.pugx.org/rmrevin/yii2-socicon/v/unstable.svg)](https://packagist.org/packages/rmrevin/yii2-socicon)
[![Total Downloads](https://poser.pugx.org/rmrevin/yii2-socicon/downloads.svg)](https://packagist.org/packages/rmrevin/yii2-socicon)

Code Status
-----------
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/rmrevin/yii2-socicon/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/rmrevin/yii2-socicon/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/rmrevin/yii2-socicon/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/rmrevin/yii2-socicon/?branch=master)
[![Travis CI Build Status](https://travis-ci.org/rmrevin/yii2-socicon.svg)](https://travis-ci.org/rmrevin/yii2-socicon)
[![Dependency Status](https://www.versioneye.com/user/projects/54119b799e16229fe00000da/badge.svg)](https://www.versioneye.com/user/projects/54119b799e16229fe00000da)

Installation
------------
Add in `composer.json`:
```
{
    "require": {
        "rmrevin/yii2-socicon": "1.0.0"
    }
}
```

Usage
-----
In view
```php
<?
// ...

rmrevin\yii\socicon\AssetBundle::register($this);

```

or as dependency in your asset bundle
```php
<?
// ...

class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'\rmrevin\yii\socicon\AssetBundle'
	];
}

```

Helper
------
```php

use rmrevin\yii\socicon\SI;

echo SI::icon('twitter');
// <i class="socicon socicon-twitter"></i>
echo SI::icon('twitter', ['class' => 'big', 'data-role' => 'social-button']);
// <i class="big socicon socicon-twitter" data-role="social-button"></i>
echo Html::submitButton(Yii::t('app', '{check} Tweet', ['check' => SI::icon('twitter')]));
// <button type="submit"><i class="socicon socicon-twitter"></i> Tweet</button>

// autocomplete in IDE
echo SI::icon(SI::_TWITTER);
echo SI::icon(SI::_DISQUS);
```

### Another prefix
```php
SI::$cssPrefix = 'si';

echo SI::icon('twitter');
// <i class="si si-twitter"></i>
```