<?php

namespace humhub\modules\questionanswer;

use Yii;
use humhub\modules\wiki\models\WikiPage;
use humhub\modules\space\models\Space;
use humhub\modules\content\components\ContentContainerActiveRecord;
use humhub\modules\content\components\ContentContainerModule;


class Module extends ContentContainerModule
{

    /**
     * @inheritdoc
     */
    public function getContentContainerTypes()
    {
        return [
            Space::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function getContentContainerDescription(ContentContainerActiveRecord $container)
    {
        if ($container instanceof Space) {
            return "Adds Q&A to this space. Appears as a category in the main Q&A module.";
        } elseif ($container instanceof User) {
            return "Adds Q&A to your profile.";
        }
    }

}
