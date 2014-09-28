<?php
/* @var $this IpotekaController */
/* @var $model Ipoteka */

$this->breadcrumbs=array(
	'Ипотека'=>array('admin'),
	$model->name,
);

$this->menu=array(
	//array('label'=>'List Ipoteka', 'url'=>array('index')),
	array('label'=>'Новая ипотека', 'url'=>array('create')),
	array('label'=>'Править', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Все записи', 'url'=>array('admin')),
);
?>

<h1>Просмотр ипотеки #<?php echo '"'.$model->name.'"'; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>
