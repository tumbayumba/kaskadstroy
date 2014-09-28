<?php
/* @var $this IpotekaController */
/* @var $model Ipoteka */

$this->breadcrumbs=array(
	'Ипотека'=>array('admin'),
	'Создать',
);

$this->menu=array(
	//array('label'=>'List Ipoteka', 'url'=>array('index')),
	array('label'=>'Все записи', 'url'=>array('admin')),
);
?>

<h1>Новая ипотека</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
