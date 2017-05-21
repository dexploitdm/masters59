<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MastersAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'masters/css/bootstrap/bootstrap.min.css',
        'masters/css/font-awesome.min.css',
        'masters/css/main.css',
        'masters/css/style.css',
        'masters/css/responsive.css',
        'masters/rs-plugin/css/settings.css',

    ];
    public $js = [
        'masters/js/vendors/jquery/jquery.min.js',
        'masters/js/vendors/wow.min.js',
        'masters/js/vendors/bootstrap.min.js',
        'masters/js/vendors/own-menu.js',
        'masters/js/vendors/flexslider/jquery.flexslider-min.js',
        'masters/js/vendors/jquery.countTo.js',
        'masters/js/vendors/jquery.isotope.min.js',
        'masters/js/vendors/jquery.bxslider.min.js',
        'masters/js/vendors/owl.carousel.min.js',
        'masters/js/vendors/jquery.sticky.js',
        'masters/js/vendors/js/main.js',
        'masters/js/vendors/modernizr.js',
        'masters/rs-plugin/js/jquery.themepunch.tools.min.js',
        'masters/rs-plugin/js/jquery.themepunch.revolution.min.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
