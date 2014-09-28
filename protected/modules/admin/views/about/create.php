<?php
/* @var $this AboutController */
/* @var $model About */

$this->breadcrumbs=array(
	'Все записи о компании'=>array('admin'),
	'Создать',
);

$this->menu=array(
	//array('label'=>'List About', 'url'=>array('index')),
	array('label'=>'Все записи', 'url'=>array('admin')),
);
?>

<h1>Новая запись</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
