<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->breadcrumbs=array(
	'Слайдер'=>array('admin'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Слайдер', 'url'=>array('admin')),
);
?>

<h1>Новый</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
