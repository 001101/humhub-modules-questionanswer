<?php

use humhub\widgets\TopMenu;
use humhub\modules\questionanswer\models\Question;

return [
    'id' => 'questionanswer',
    'class' => 'humhub\modules\questionanswer\Module',
    'namespace' => 'humhub\modules\questionanswer',
    'events' => [
        [
            'class' => \humhub\widgets\TopMenu::className(),
            'event' => \humhub\widgets\TopMenu::EVENT_INIT,
            'callback' => ['humhub\modules\questionanswer\Events', 'onTopMenuInit'],
        ],
        [
            'class' => humhub\modules\space\widgets\Menu::className(),
            'event' => humhub\modules\space\widgets\Menu::EVENT_INIT,
            'callback' => ['humhub\modules\questionanswer\Events', 'onSpaceMenuInit']
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => ['humhub\modules\questionanswer\Events', 'onAdminMenuInit']
        ],
        [
            'class' => \humhub\components\ActiveRecord::className(),
            'event' => \humhub\components\ActiveRecord::EVENT_AFTER_INSERT,
            'callback' => ['humhub\modules\questionanswer\Events', 'onActiveRecordAfterSave'],

        ],
        [
            'class' => \humhub\modules\search\engine\Search::className(),
            'event' => \humhub\modules\search\engine\Search::EVENT_ON_REBUILD,
            'callback' => ['humhub\modules\questionanswer\Events', 'onSearchRebuild'],
        ]
    ],
];
?>