<?php
/* @var $this MainPageController */
/* @var $model MainPage */

$this->breadcrumbs=array(
	'Главная'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Новая запись', 'url'=>array('create')),
	array('label'=>'Править', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Все записи', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
