<?php
/**
 * Socicon.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\socicon;

/**
 * Class Socicon
 * @package rmrevin\yii\socicon
 */
class Socicon
{

    /**
     * @param string $name
     * @param array $options
     * @return component\Icon
     */
    public static function icon($name, $options = [])
    {
        return new component\Icon($name, $options);
    }
}