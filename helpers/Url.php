<?php

namespace humhub\modules\questionanswer\helpers;

use Yii;
use yii\helpers\BaseUrl;

class Url extends BaseUrl
{


    /**
     * Create a URL that correctly carries the content container
     * (or lack of) with it.
     *
     * @param null $route
     * @param array $params
     * @param bool $scheme
     * @return string
     */
    public static function createUrl($route = null, $params = array(), $scheme = false)
    {

        array_unshift($params, $route);

        if (!isset($params['sguid']) && Yii::$app->request->get('sguid')) {
            $params['sguid'] = Yii::$app->request->get('sguid');
        }

        return parent::toRoute($params, $scheme);

    }

}
