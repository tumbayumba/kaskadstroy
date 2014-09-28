<?php
/* @var $this AboutController */
/* @var $model About */

$this->breadcrumbs=array(
	'О компании'=>array('admin'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List About', 'url'=>array('index')),
	array('label'=>'Новая запись', 'url'=>array('create')),
	array('label'=>'Править', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Все записи', 'url'=>array('admin')),
);
?>

<h1>Просмотр записи #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
