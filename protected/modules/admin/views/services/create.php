<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->breadcrumbs=array(
	'Услуги'=>array('admin'),
	'Создать',
);

$this->menu=array(
	//array('label'=>'List Services', 'url'=>array('index')),
	array('label'=>'Все услуги', 'url'=>array('admin')),
);
?>

<h1>Новая услуга</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
