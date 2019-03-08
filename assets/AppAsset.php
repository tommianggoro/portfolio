<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'ionicons/css/ionicons.min.css',
        'css/animate.min.css',
        'css/aos.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery.js',
        'js/aos.js',
        'js/bootstrap.min.js',
        'js/custom.js',
        'js/jquery.form.js',
        'js/jquery.stellar.min.js',
        'js/jquery.validate.min.js',
        'js/plugins.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
