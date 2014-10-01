<?php
/* @var $this ComplexController */
/* @var $model Complex */

$this->breadcrumbs=array(
	'Комплексы'=>array('admin'),
	'Создать',
);

$this->menu=array(
	//array('label'=>'List Complex', 'url'=>array('index')),
	array('label'=>'Комплексы', 'url'=>array('admin')),
);
?>

<h1>Создать комплекс</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
