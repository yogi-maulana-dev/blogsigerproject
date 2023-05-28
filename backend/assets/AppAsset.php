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
        'css/demo.css',
    ];
    public $js = [
          'js/plugin/webfont/webfont.min.js',
        'js/core/jquery.3.2.1.min.js',
        'js/core/popper.min.js',
        'js/core/bootstrap.min.js',
        'js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js',
        'js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js',
        'js/plugin/bootstrap-toggle/bootstrap-toggle.min.js',
        'js/plugin/jquery-scrollbar/jquery.scrollbar.min.js',
        'js/plugin/datatables/datatables.min.js',
        'js/atlantis.min.js',
        'js/setting-demo2.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
