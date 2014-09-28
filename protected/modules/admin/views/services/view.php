<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->breadcrumbs=array(
	'Услуги'=>array('admin'),
	$model->name,
);

$this->menu=array(
	//array('label'=>'List Services', 'url'=>array('index')),
	array('label'=>'Новая услуга', 'url'=>array('create')),
	array('label'=>'Править', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Все услуги', 'url'=>array('admin')),
);
?>

<h1>Просмотр услуги #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'content',
	),
)); ?>
