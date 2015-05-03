<?php
/**
 * AssetBundleTest.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\socicon\tests\unit\socicon;

use rmrevin\yii\socicon\AssetBundle;

/**
 * Class AssetBundleTest
 * @package rmrevin\yii\socicon\tests\unit\socicon
 */
class AssetBundleTest extends \rmrevin\yii\socicon\tests\unit\TestCase
{

    public function testMain()
    {
        AssetBundle::register(\Yii::$app->getView());
    }
}