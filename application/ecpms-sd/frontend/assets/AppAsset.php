<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        //'css/democute.css',
        //source
        //'css/style.css',
        /*float
        'float/css/page.css',
        'float/css/reset.css',
        'float/css/other.css',*/
        /*aa
        'style.css',*/
        /*step
        'step/style.css',*/
    ];
    public $js = [
        /*'js/jquery.min.js',
        'js/jquery.easing.1.3.js',
        'js/script.js',*/
        /*source
        'js/login.js',
        'js/jquery.min.js',*/
        /*float
        'float/js/jquery.dimensions.js',
        'float/js/jquery_mini.js',
        'float/js/floatmenu.js',*/
        /*aa
        'jquery-ui.min.js',
        'jquery.inputfocus-0.9.min.js',
        'jquery.main.js',
        'jquery.min.js',*/
        /*step
        'step/jquery-1.9.1.min.js',
        'step/jquery.easing.min.js',
        'step/script.js',*/
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
