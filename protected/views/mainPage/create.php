<?php
/* @var $this MainPageController */
/* @var $model MainPage */

$this->breadcrumbs=array(
	'Main Pages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MainPage', 'url'=>array('index')),
	array('label'=>'Manage MainPage', 'url'=>array('admin')),
);
?>

<h1>Create MainPage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>