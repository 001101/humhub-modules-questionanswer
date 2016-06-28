<?php
/* @var $this AnonAccountsSettingsController */
/* @var $model AnonAccountsSettings */
/* @var $form CActiveForm */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use humhub\widgets\DataSaved;

?>
<div class="panel panel-default">
    <div class="panel-heading"><strong>Q&A</strong> Settings</div>
    <div class="panel-body">

        <?php $form = ActiveForm::begin(array(
            'id'=>'anon-accounts-settings-index2-form',
            'enableAjaxValidation'=>false,
        )); ?>

        <div class="form-group">
            <p>Q&A module has two <i>modes</i>, global and spaces.</p>
            <ul>
                <li><b>Global</b> - Is where all of the Q&A content is combined into one view on the front page (this is the default mode).</li>
                <li><b>Spaces</b> - Is where <i>spaces</i> (with the questionanswer module enabled) act as categories. The front page shows the available categories and the ability to post global is removed.</li>
            </ul>
        </div>

        <div class="form-group">
            <!-- show flash message after saving -->
            <?php echo DataSaved::widget(); ?>
            <?php echo $form->errorSummary($model); ?>
        </div>
        <?php
        // Use Global Content Container?
        echo $form->field($model, 'useGlobalContentContainer')->dropDownList($options,['prompt'=>'Choose Q&A mode']);
        ?>
        
        <?php echo Html::submitButton('Save', array('class' => 'btn btn-primary')); ?>

        <?php $form->end(); ?>

    </div>
</div>
