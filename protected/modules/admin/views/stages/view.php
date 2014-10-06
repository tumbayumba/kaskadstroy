<?php
/* @var $this StagesController */
/* @var $model Stages */

$this->breadcrumbs=array(
	'Stages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Stages', 'url'=>array('index')),
	array('label'=>'Create Stages', 'url'=>array('create')),
	array('label'=>'Update Stages', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Stages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stages', 'url'=>array('admin')),
);
?>

<h1>View Stages #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'house_id',
		'image',
	),
)); ?>
