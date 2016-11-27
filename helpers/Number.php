<?php

namespace nexotaku\toolkit\helpers;

use Yii;

/**
 * Вспомогательные функции для форматирования чисел.
 *
 * @author Nex Otaku <nex@otaku.ru>
 */
class Number
{
    public static function decimal($value, $decimals)
    {
        return Yii::$app->formatter->asDecimal($value, $decimals);
    }
    public static function signedDecimal($value, $decimals)
    {
        $positive = ($value >= 0) ? $value : -$value;
        $sign = ($value > 0) ? '+ ' : (($value < 0) ? '- ' : '');
        $simple = Yii::$app->formatter->asDecimal($positive, $decimals);
        return $sign . $simple;
    }
}
