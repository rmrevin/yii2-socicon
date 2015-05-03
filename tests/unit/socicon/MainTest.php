<?php
/**
 * MainTest.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\socicon\tests\unit\socicon;

use rmrevin\yii\socicon\SI;
use rmrevin\yii\socicon\Socicon;

/**
 * Class MainTest
 * @package rmrevin\yii\socicon\tests\unit\socicon
 */
class MainTest extends \rmrevin\yii\socicon\tests\unit\TestCase
{

    public function testMain()
    {
        $this->assertInstanceOf('rmrevin\yii\socicon\SI', new SI());
        $this->assertInstanceOf('rmrevin\yii\socicon\Socicon', new SI());

        $this->assertInstanceOf('rmrevin\yii\socicon\Socicon', new Socicon());

        $Icon = SI::icon('twitter');
        $this->assertInstanceOf('rmrevin\yii\socicon\component\Icon', $Icon);
    }

    public function testIconOutput()
    {
        $this->assertEquals(SI::icon('twitter'), '<i class="socicon socicon-twitter"></i>');
        $this->assertEquals(SI::icon('twitter')->addCssClass('highlight'), '<i class="socicon socicon-twitter highlight"></i>');
    }

    public function testGetConstants()
    {
        $this->assertNotEmpty(SI::getConstants(false));
        $this->assertNotEmpty(SI::getConstants(true));
    }
}