<div class="panel panel-default qanda-panel">
    <?php if($group != null) { ?>
    <div class="panel-heading">
        <?php echo $group; ?>
    </div>
    <?php } ?>
    <div class="list-group">
        <?php foreach($categories as $category) { ?>
            <a href="<?php echo $category['link']; ?>" class="list-group-item">
                <b class="list-group-item-heading"><?php echo $category['name']; ?></b>
                <p class="list-group-item-text">
                    <?php echo $category['description']; ?>
                </p>
            </a>
            <?php
            $preview = \humhub\modules\questionanswer\models\Question::findByContainer($category['space'])->limit(3)->orderBy('created_at DESC')->all();
            foreach($preview as $question) { ?>
                <small>
                    <ul>
                        <li>
                            <?php
                            echo \yii\helpers\Html::a(
                                \yii\helpers\Html::encode($question->post_title),
                                \humhub\modules\questionanswer\helpers\Url::createUrl('view', ['id'=>$question->id])
                            );
                            ?>
                        </li>
                    </ul>
                </small>
            <?php } ?>

        <?php } ?>
    </div>
</div>