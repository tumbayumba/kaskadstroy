<?php
/* @var $this StagesController */
/* @var $model Stages */

$this->breadcrumbs=array(
	$house->house_name=>array('appartments/admin','house_id'=>$house->id),
	'Править',
);

$this->menu=array(
	array('label'=>'К списку квартир', 'url'=>array('appartments/admin','house_id'=>$house->id)),
	array('label'=>'Добавить', 'url'=>array('create','house_id'=>$house->id)),
);
/*
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#stages-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");*/
?>

<h1><?php echo $house->house_name;?> - этапы строительства</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
));*/ ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stages-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'id',
		//'house_id',
		//'image',
		array(
			'name'=>'image',
			'type' => 'raw',
			'value'=>'CHtml::image(Yii::app()->request->baseUrl."/images/stages/".$data->house_id."/".$data->image,"",array("height"=>100))',
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{delete}',
		),
	),
)); ?>


