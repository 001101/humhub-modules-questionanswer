<?php

namespace humhub\modules\questionanswer\controllers;

use humhub\modules\questionanswer\forms\SettingsForm;
use Yii;
use humhub\models\Setting;
use yii\helpers\Url;
use humhub\compat\HForm;
use humhub\modules\anon_accounts\forms\AnonAccountsForm;
use humhub\libs\ProfileImage;

class SettingController extends \humhub\modules\admin\components\Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'acl' => [
                'class' => \humhub\components\behaviors\AccessControl::className(),
                'adminOnly' => true
            ]
        ];
    }

    /**
     * Configuration Action for Super Admins
     */
    public function actionIndex() {

        $form = new SettingsForm;

        if (isset($_POST['SettingsForm'])) {

            $form->attributes = $_POST['SettingsForm'];

            if ($form->validate()) {

                $form->useGlobalContentContainer = Setting::SetText('useGlobalContentContainer', $form->useGlobalContentContainer);

                // set flash message
                Yii::$app->getSession()->setFlash('data-saved', 'Saved');

                return $this->redirect(Url::toRoute('index'));
            }

        } else {
            $form->useGlobalContentContainer = Setting::GetText('useGlobalContentContainer');
        }

        return $this->render('index', array(
            'model' => $form,
            'options' => ['1' => 'Global', '0' => 'Spaces'],
        ));

    }

}