<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

// Current active controller
$controller = Yii::$app->controller;

$breadcrumbs=array(
	'Questions'=>array('index'),
	'Manage',
);

$menu=array(
	array('label'=>'List Question', 'url'=>array('index')),
	array('label'=>'Create Question', 'url'=>array('create')),
);
/* todo: repair clientScript
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#question-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
*/
?>

<style>
.vote_control .btn-xs:nth-child(1) {
    margin-bottom:3px;
}

.qanda-panel {
    margin-top:57px;
}

.qanda-header-tabs {
    margin-top:-49px;
}
</style>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
	        <div class="panel qanda-panel">
	        	<div class="panel-heading">
	        		<?php echo $this->render('../partials/admin_menu_links'); ?>
	        		<strong>Manage</strong> <?php echo $controller->id ?>s

	        	</div>

	            <div class="panel-body">
					<p>
					You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
					or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
					</p>

					<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
					<div class="search-form" style="display:none">
					<?php /*$this->renderPartial('_search',array(
						'model'=>$model,
					)); todo: reconstruct Advance Search*/ ?>
					</div><!-- search-form -->

                    <?php
                    $controllerString = (string)($controller->id);
                    $gridString = '_adminGrid';
                    $partialLocation = '../' . $controllerString . '/' . $gridString;

                    echo $this->render($partialLocation, array(
                        'dataProvider'  => $dataProvider,
                        'searchModel'   => $searchModel,
                        'model'         => $model
                    ));
                    ?>


				</div>
			</div>
		</div>
	</div>
</div>

