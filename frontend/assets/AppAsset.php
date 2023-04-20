<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
    ];
    public $js = [
          'js/core/jquery.3.2.1.min.js',
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
