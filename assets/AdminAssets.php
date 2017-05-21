<?php

namespace app\assets;

use yii\web\AssetBundle;


class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'adminTheme/vendors/bower_components/animate.css/animate.min.css',
        'adminTheme/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css',
        'adminTheme/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css',
        'adminTheme/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css',
        'adminTheme/css/app-1.min.css',
    ];
    public $js = [
        'adminTheme/js/page-loader.min.js',
        'adminTheme/vendors/bower_components/jquery/dist/jquery.min.js',
        'adminTheme/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'adminTheme/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',
        'adminTheme/vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js',
        'adminTheme/vendors/bower_components/moment/min/moment.min.js"',
        'adminTheme/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js',
        'adminTheme/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js',
        'adminTheme/vendors/bower_components/salvattore/dist/salvattore.min.js',
        'adminTheme/vendors/bower_components/flot/jquery.flot.js',
        'adminTheme/vendors/bower_components/flot/jquery.flot.resize.js',
        'adminTheme/vendors/bower_components/flot.curvedlines/curvedLines.js',
        'adminTheme/vendors/jquery.sparkline/jquery.sparkline.min.js',
        'adminTheme/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js',
        'adminTheme/demo/js/flot-charts/curved-line.js',
        'adminTheme/demo/js/flot-charts/line.js',
        'adminTheme/demo/js/easy-pie-charts.js',
        'adminTheme/demo/js/misc.js',
        'adminTheme/demo/js/sparkline-charts.js',
        'adminTheme/demo/js/calendar.js',
        'adminTheme/js/app.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
