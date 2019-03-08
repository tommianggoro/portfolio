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
class AuthAsset extends AssetBundle
{
	public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'backendAssets/vendor/fontawesome-free/css/all.min.css',
        'backendAssets/css/sb-admin.css'
    ];
    public $js = [
       'backendAssets/vendor/jquery/jquery.min.js',
       'backendAssets/vendor/bootstrap/js/bootstrap.bundle.min.js',
       'backendAssets/vendor/jquery-easing/jquery.easing.min.js'
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}