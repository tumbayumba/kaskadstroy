<?php
/* @var $this MissionController */
/* @var $model Mission */

$this->breadcrumbs=array(
	'Миссия'=>array('admin'),
	$model->name,
);

$this->menu=array(
	//array('label'=>'List Mission', 'url'=>array('index')),
	array('label'=>'Новая миссия', 'url'=>array('create')),
	array('label'=>'Править', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Все записи', 'url'=>array('admin')),
);
?>

<h1>Просмотр "<?php echo $model->name; ?>"</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>
