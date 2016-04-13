<?php

namespace humhub\modules\questionanswer\controllers;

use humhub\modules\questionanswer\models\Question;
use humhub\modules\questionanswer\models\QuestionSearch;
use Yii;
use yii\web\HttpException;
use humhub\widgets\MarkdownView;
use humhub\modules\content\components\ContentContainerController;
use humhub\modules\space\models\Space;
use humhub\modules\file\models\File;
use humhub\modules\content\models\Content;
use humhub\modules\wiki\models\WikiPage;
use humhub\modules\wiki\models\WikiPageRevision;

class CategoryController extends ContentContainerController
{

    /**
     * @inheritdoc
     */
    public $hideSidebar = true;

    public function beforeAction($action)
    {
        if ($this->contentContainer instanceof Space && !$this->contentContainer->isMember()) {
            throw new HttpException(403, 'You need to be member of this space.');
        }

        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
//        $query = WikiPage::find()->orderBy('title ASC')->contentContainer($this->contentContainer);
//            'contentContainer' => $this->contentContainer,

        $searchModel = new QuestionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->setSort([
            'defaultOrder' => [
                'created_at'=>SORT_DESC
            ]
        ]);

        return $this->render('/category/index', array(
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'model' => Question::find()
        ));

    }
    
}
