<?php

namespace humhub\modules\questionanswer\forms;

use Yii;

/**
 * @package humhub.modules_core.admin.forms
 * @since 0.5
 */
class SettingsForm extends \yii\base\Model {

    public $useGlobalContentContainer;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            array('useGlobalContentContainer', 'safe'),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels() {
        return array(
            'useGlobalContentContainer' => 'Choose Q&A Mode',
        );
    }

}