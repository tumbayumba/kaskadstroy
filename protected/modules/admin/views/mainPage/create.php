<?php
/* @var $this MainPageController */
/* @var $model MainPage */

$this->breadcrumbs=array(
	'Главная страница'=>array('admin'),
	'Создать',
);

$this->menu=array(
	//array('label'=>'Все записи', 'url'=>array('index')),
	array('label'=>'Все записи', 'url'=>array('admin')),
);
?>

<h1>Новая запись</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
