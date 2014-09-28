<?php
/* @var $this IpotekaController */
/* @var $model Ipoteka */

$this->breadcrumbs=array(
	'Ipotekas'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ipoteka', 'url'=>array('index')),
	array('label'=>'Create Ipoteka', 'url'=>array('create')),
	array('label'=>'View Ipoteka', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ipoteka', 'url'=>array('admin')),
);
?>

<h1>Update Ipoteka <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>