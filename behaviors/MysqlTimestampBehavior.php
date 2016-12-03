<?php

namespace nex_otaku\toolkit\behaviors;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * Версия TimestampBehavior, 
 * настроенная по умолчанию на заполнение времени из БД.
 *
 * @author Nex Otaku <nex@otaku.ru>
 */
class MysqlTimestampBehavior extends TimestampBehavior
{
    public $value;
    
    public function init()
    {
        parent::init();
        
        if ($this->value === null) {
            $this->value = new Expression('NOW()');
        }
    }
}
