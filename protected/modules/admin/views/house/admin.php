<?php
/* @var $this HouseController */
/* @var $model House */

$this->breadcrumbs=array(
	'Комплексы'=>array('complex/admin'),
	'Редактировать',
);

$this->menu=array(
	//array('label'=>'List House', 'url'=>array('index')),
	array('label'=>'Добавить дом', 'url'=>array('create','complex_id'=>$complex->id)),
);

/*Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#house-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");*/
?>

<h1><?php echo $complex->complex_name; ?></h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
));*/ ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'house-grid',
	'dataProvider'=>$model->mySearch($complex->id),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'complex_id',
		//'house_name',
		array(
			'name'=>'house_name',
			'type'=>'raw',
			'value'=>'CHtml::link($data->house_name,array("appartments/admin","house_id"=>$data->id),array("style"=>"text-decoration: none;"))', 
		),
		//'floorplan_image',
		'description',
		//'image',
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
