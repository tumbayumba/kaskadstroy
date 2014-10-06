<?php
/* @var $this StagesController */
/* @var $model Stages */

$this->breadcrumbs=array(
	$house->house_name=>array('appartments/admin','house_id'=>$house->id),
	'Добавить фото',
);

$this->menu=array(
	//array('label'=>'List Stages', 'url'=>array('index')),
	array('label'=>'Все фото', 'url'=>array('admin','house_id'=>$house->id)),
);
?>

<h1>Добавить фото</h1>
<p>Выберите фото для загрузки на сайт</p>

<?php $this->renderPartial('_form', array('model'=>$model,'house'=>$house)); ?>
