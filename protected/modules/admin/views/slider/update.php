<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->breadcrumbs=array(
	'Слайдер'=>array('admin'),
	$model->header,
);

$this->menu=array(
	array('label'=>'Новый', 'url'=>array('create')),
	array('label'=>'Слайдер', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
