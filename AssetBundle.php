<?php
/**
 * AssetBundle.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\socicon;

/**
 * Class AssetBundle
 * @package rmrevin\yii\socicon
 */
class AssetBundle extends \yii\web\AssetBundle
{

    /**
     * @inherit
     */
    public $sourcePath = '@vendor/rmrevin/yii2-socicon/assets';

    /**
     * @inherit
     */
    public $css = [
        'styles.css',
    ];
}