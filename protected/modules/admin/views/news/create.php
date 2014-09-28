<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Новости'=>array('admin'),
	'Создать',
);

$this->menu=array(
	//array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Все новости', 'url'=>array('admin')),
);
?>

<h1>Новая запись</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
