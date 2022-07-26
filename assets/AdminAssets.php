<?php

namespace app\assets;

use yii\web\AssetBundle;


class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/adminTheme/vendors/bower_components/animate.css/animate.min.css',
        'web/adminTheme/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css',
        'web/adminTheme/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css',
        'web/adminTheme/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css',
        'web/adminTheme/css/app-1.min.css',
    ];
    public $js = [
        'web/adminTheme/js/page-loader.min.js',
        'web/adminTheme/vendors/bower_components/jquery/dist/jquery.min.js',
        'web/adminTheme/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'web/adminTheme/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',
        'web/adminTheme/vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js',
        'web/adminTheme/vendors/bower_components/moment/min/moment.min.js"',
        'web/adminTheme/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js',
        'web/adminTheme/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js',
        'web/adminTheme/vendors/bower_components/salvattore/dist/salvattore.min.js',
        'web/adminTheme/vendors/bower_components/flot/jquery.flot.js',
        'web/adminTheme/vendors/bower_components/flot/jquery.flot.resize.js',
        'web/adminTheme/vendors/bower_components/flot.curvedlines/curvedLines.js',
        'web/adminTheme/vendors/jquery.sparkline/jquery.sparkline.min.js',
        'web/adminTheme/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js',
        'web/adminTheme/demo/js/flot-charts/curved-line.js',
        'web/adminTheme/demo/js/flot-charts/line.js',
        'web/adminTheme/demo/js/easy-pie-charts.js',
        'web/adminTheme/demo/js/misc.js',
        'web/adminTheme/demo/js/sparkline-charts.js',
        'web/adminTheme/demo/js/calendar.js',
        'web/adminTheme/js/app.min.js',
        'web/adminTheme/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
