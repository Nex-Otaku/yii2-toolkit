<?php

namespace nex_otaku\toolkit\rbac\rules;

use yii\rbac\Rule;
use Yii;

/**
 * Зарегистрированный пользователь.
 *
 * @author Nex Otaku <nex@otaku.ru>
 */
class UserRule extends Rule
{
    public $name = 'isUser';
    
    public function execute($user, $item, $params)
    {
        return !Yii::$app->user->isGuest;
    }
}
