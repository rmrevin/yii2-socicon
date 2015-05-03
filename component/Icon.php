<?php
/**
 * Icon.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\socicon\component;

use rmrevin\yii\socicon\SI;
use yii\helpers\Html;

/**
 * Class Icon
 * @package rmrevin\yii\socicon\component
 */
class Icon
{

    /** @var array */
    private $options = [];

    /**
     * @param string $name
     * @param array $options
     */
    public function __construct($name, $options = [])
    {
        Html::addCssClass($options, SI::$cssPrefix . ' ' . SI::$cssPrefix . '-' . $name);

        $this->options = $options;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * @param string $class
     * @return self
     */
    public function addCssClass($class)
    {
        Html::addCssClass($this->options, $class);

        return $this;
    }

    /**
     * @return string
     */
    public function render()
    {
        return Html::tag('i', null, $this->options);
    }
}
