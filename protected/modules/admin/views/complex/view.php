<?php
/* @var $this ComplexController */
/* @var $model Complex */

$this->breadcrumbs=array(
	'Комплексы'=>array('admin'),
	$model->complex_name,
);

$this->menu=array(
	//array('label'=>'List Complex', 'url'=>array('index')),
	array('label'=>'Новый комплекс', 'url'=>array('create')),
	array('label'=>'Править', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Все комплексы', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->complex_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'complex_name',
		'adress',
		//'driveway_image',
		//'image',
		'description',
	),
)); ?>
