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
        'css/fonts.min.css',
    ];
    public $js = [
          'js/plugin/webfont/webfont.min.js',
        // 'js/core/jquery.3.2.1.min.js',
        // 'js/core/popper.min.js',
        // 'js/core/bootstrap.min.js',
        // 'js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js',
        // 'js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js',
        // 'js/plugin/moment/moment.min.js',
        // 'js/plugin/chart.js/chart.min.js',
        // 'js/plugin/jquery.sparkline/jquery.sparkline.min.js',
        // 'js/plugin/chart-circle/circles.min.js',
        // 'js/plugin/datatables/datatables.min.js',
        // 'js/plugin/bootstrap-notify/bootstrap-notify.min.js',
        // 'js/plugin/bootstrap-toggle/bootstrap-toggle.min.js',
        // 'js/plugin/jqvmap/jquery.vmap.min.js',
        // 'js/plugin/jqvmap/maps/jquery.vmap.world.js',
        // 'js/plugin/gmaps/gmaps.js',
        // 'js/plugin/dropzone/dropzone.min.js',
        // 'js/plugin/fullcalendar/fullcalendar.min.js',
        // 'js/plugin/datepicker/bootstrap-datetimepicker.min.js',
        // 'js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js',
        // 'js/plugin/bootstrap-wizard/bootstrapwizard.js',
        // 'js/plugin/jquery.validate/jquery.validate.min.js',
        // 'js/plugin/summernote/summernote-bs4.min.js',
        // 'js/plugin/select2/select2.full.min.js',
        // 'js/plugin/sweetalert/sweetalert.min.js',
        // 'js/plugin/owl-carousel/owl.carousel.min.js',
        // 'js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js',
        // 'js/atlantis.min.js',
        // 'js/setting-demo.js',
        // 'js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
