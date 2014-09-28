<?php
/* @var $this MissionController */
/* @var $model Mission */

$this->breadcrumbs=array(
	'Миссия'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Править',
);

$this->menu=array(
	//array('label'=>'List Mission', 'url'=>array('index')),
	array('label'=>'Новая миссия', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Все записи', 'url'=>array('admin')),
);
?>

<h1>Править <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
