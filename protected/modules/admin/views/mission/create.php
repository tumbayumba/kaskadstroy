<?php
/* @var $this MissionController */
/* @var $model Mission */

$this->breadcrumbs=array(
	'Миссия'=>array('admin'),
	'Создать',
);

$this->menu=array(
	//array('label'=>'List Mission', 'url'=>array('index')),
	array('label'=>'Все записи', 'url'=>array('admin')),
);
?>

<h1>Новая миссия</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
