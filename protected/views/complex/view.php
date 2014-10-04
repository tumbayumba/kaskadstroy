<?php
/* @var $this ComplexController */
/* @var $model Complex */

$this->breadcrumbs=array(
	'Complexes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Complex', 'url'=>array('index')),
	array('label'=>'Create Complex', 'url'=>array('create')),
	array('label'=>'Update Complex', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Complex', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Complex', 'url'=>array('admin')),
);
?>

<h1>View Complex #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'complex_name',
		'adress',
		'driveway_image',
		'image',
		'description',
	),
)); ?>
