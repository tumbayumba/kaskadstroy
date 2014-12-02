<?php
/* @var $this FooterController */
/* @var $model Footer */

$this->breadcrumbs=array(
	'Подвал'=>array('admin'),
	'Править',
);

$this->menu=array(
	array('label'=>'Подвал', 'url'=>array('admin')),
);
?>

<h1>Редактировать</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
