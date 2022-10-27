<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/atlantis.css',
    ];
    public $js = [
    'js/plugin/webfont/webfont.min.js',
    'js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js',
    'js/core/popper.min.js',
    'js/core/bootstrap.min.js',
    'js/atlantis.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
