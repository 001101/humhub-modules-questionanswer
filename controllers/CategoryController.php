<?php

namespace humhub\modules\questionanswer\controllers;

use humhub\modules\questionanswer\models\Question;
use humhub\modules\questionanswer\models\QuestionSearch;
use Yii;
use yii\data\ActiveDataProvider;
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

        $query = Question::find()
                            ->andFilterWhere(['post_type' => 'question'])
                            ->orderBy('created_at DESC')
                            ->contentContainer($this->contentContainer);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // load the search form data and validate
//        if (!($this->load($params) && $this->validate())) {
//            return $dataProvider;
//        }

        // adjust the query by adding the filters
//        $query->andFilterWhere(['id' => $this->id]);


//        $searchModel = new QuestionSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->setSort([
            'defaultOrder' => [
                'created_at'=>SORT_DESC
            ]
        ]);

        return $this->render('/category/index', array(
            'dataProvider' => $dataProvider,
            'searchModel' => $query,
            'model' => Question::find()
        ));

    }


    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {

        $question = new Question();
        print_r($this->contentContainer);
        /*if(isset($_POST['Question'])) {

            $question->load(Yii::$app->request->post());
            $question->post_type = "question";

            $containerClass = User::className();
            $contentContainer = $containerClass::findOne(['guid' => Yii::$app->getUser()->guid]);
            $question->content->container = $contentContainer;

            $question->content->attachFileGuidsAfterSave = Yii::$app->request->post('fileList');

            if ($question->validate()) {

                // Save and Index the `content` object the search engine
                // NOTE: You could probably do this by adding in container->visibility yourself
                // NOTE2: it's also worth looking at doing this the right way and making Q&A a module
                //			which can be enabled on Spaces and Users.
                // 		This will free us from needing to do work arounds like below :)
                \humhub\modules\content\widgets\WallCreateContentForm::create($question, $contentContainer);
                $question->save();

                if(isset($_POST['Tags'])) {
                    // Split tag string into array
                    $tags = explode(", ", $_POST['Tags']);
                    foreach($tags as $tag) {

                        $tag = Tag::firstOrCreate($tag, $contentContainer);
                        $question_tag = new QuestionTag();
                        $question_tag->question_id = $question->id;
                        $question_tag->tag_id = $tag->id;
                        $question_tag->save();
                    }
                }


                $this->redirect(Url::toRoute(['question/view', 'id' => $question->id]));

            }

        }

        return $this->render('create',array(
            'model'=>$question,
        ));*/
    }

}
