<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->breadcrumbs=array(
	'Услуги'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Править',
);

$this->menu=array(
	//array('label'=>'List Services', 'url'=>array('index')),
	array('label'=>'Новая услуга', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Все услуги', 'url'=>array('admin')),
);
?>

<h1>Править услугу <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
