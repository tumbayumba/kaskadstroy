<?php
/* @var $this FooterController */
/* @var $model Footer */

$this->breadcrumbs=array(
	'Подвал'=>array('admin'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Подвал', 'url'=>array('admin')),
);
?>

<h1>Новая запись</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
