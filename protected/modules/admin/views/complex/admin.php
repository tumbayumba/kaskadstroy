<?php
/* @var $this ComplexController */
/* @var $model Complex */

$this->breadcrumbs=array(
	'Комплексы'=>array('admin'),
	'Редактировать',
);

$this->menu=array(
	//array('label'=>'List Complex', 'url'=>array('index')),
	array('label'=>'Новый комплекс', 'url'=>array('create')),
);

/*Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#complex-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");*/
?>

<h1>Редактировать комплексы</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
));*/ ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'complex-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'complex_name',
		array(
			'name'=>'complex_name',
			'type'=>'raw',
			'value'=>'CHtml::link($data->complex_name,array("house/admin","complex_id"=>$data->id),array("style"=>"text-decoration: none;"))', 
		),
		//'adress',
		//'driveway_image',
		//'image',
		//'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
