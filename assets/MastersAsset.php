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
        'web/masters/css/bootstrap/bootstrap.min.css',
        'web/masters/css/font-awesome.min.css',
        'web/masters/css/main.css',
        'web/masters/css/responsive.css',
        'web/masters/swiper/swiper-bundle.min.css',
        'web/masters/css/style.css',
        [
            'href' => 'web/masters/favicon.png',
            'rel' => 'icon',
            'sizes' => '32x32',
        ],
    ];
    public $js = [
        'web/masters/js/vendors/jquery/jquery.min.js',
        'web/masters/js/vendors/wow.min.js',
        'web/masters/js/vendors/bootstrap.min.js',
        'web/masters/js/vendors/own-menu.js',
        'web/masters/js/vendors/flexslider/jquery.flexslider-min.js',
        'web/masters/js/vendors/jquery.countTo.js',
        'web/masters/js/vendors/jquery.isotope.min.js',
        'web/masters/js/vendors/jquery.bxslider.min.js',
        'web/masters/js/vendors/owl.carousel.min.js',
        'web/masters/js/vendors/jquery.sticky.js',
        'web/masters/js/vendors/modernizr.js',
        'web/masters/swiper/swiper-bundle.min.js',
        'https://kit.fontawesome.com/9df500f697.js',
        'web/masters/js/imask.js',
        'web/masters/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
