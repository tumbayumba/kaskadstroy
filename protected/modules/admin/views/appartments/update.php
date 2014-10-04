<?php
/* @var $this AppartmentsController */
/* @var $model Appartments */

$this->breadcrumbs=array(
	$house->house_name=>array('admin','house_id'=>$house->id),
	'Править',
);

$this->menu=array(
	//array('label'=>'List Appartments', 'url'=>array('index')),
	array('label'=>'Новое помещение', 'url'=>array('create','house_id'=>$house->id)),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Все помещения', 'url'=>array('admin','house_id'=>$house->id)),
);
?>

<h1>Редактировать <?php echo $model->square; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'house'=>$house)); ?>
