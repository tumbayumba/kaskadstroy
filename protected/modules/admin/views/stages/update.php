<?php
/* @var $this StagesController */
/* @var $model Stages */

$this->breadcrumbs=array(
	'Stages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stages', 'url'=>array('index')),
	array('label'=>'Create Stages', 'url'=>array('create')),
	array('label'=>'View Stages', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Stages', 'url'=>array('admin')),
);
?>

<h1>Update Stages <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>