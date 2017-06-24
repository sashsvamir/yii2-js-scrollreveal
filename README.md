# Yii2 Asset ScrollReveal js


[ScrollReveal](https://github.com/jlmakes/scrollreveal)



## Installation

`composer require sashsvamir/yii2-js-scrollreveal`




## Using


in `AppAsset`:
```php
class AppAsset extends AssetBundle
{
	// ...
    public $depends = [
        // ...
        'sashsvamir\scrollreveal\ScrollrevealToAsset',
    ];
}

```


in view:
```php
$this->registerAssetBundle(\sashsvamir\scrollreveal\ScrollrevealToAsset::className());
```


