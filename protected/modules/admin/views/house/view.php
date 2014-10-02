<?php
/* @var $this HouseController */
/* @var $model House */

$this->breadcrumbs=array(
	$complex->complex_name=>array('admin','complex_id'=>$complex->id),
	$model->house_name,
);

$this->menu=array(
	//array('label'=>'List House', 'url'=>array('index')),
	array('label'=>'Добавить дом', 'url'=>array('create','complex_id'=>$complex->id)),
	array('label'=>'Править', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Все дома', 'url'=>array('admin','complex_id'=>$complex->id)),
);
?>

<h1><?php echo $model->house_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		//'complex_id',
		array(
			'name'=>'complex_id',
			'value'=>$complex->complex_name,
		),
		'house_name',
		//'floorplan_image',
		'description',
		//'image',
		'status',
	),
)); ?>
