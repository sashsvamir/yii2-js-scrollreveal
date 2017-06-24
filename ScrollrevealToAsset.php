<?php
namespace sashsvamir\scrollreveal;

use yii\web\AssetBundle;


class ScrollrevealToAsset extends AssetBundle
{
    public $sourcePath = '@bower/scrollreveal/dist/';
    public $js = [
        'scrollreveal.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}