<?php
/* @var $this IpotekaController */
/* @var $model Ipoteka */

$this->breadcrumbs=array(
	'Ipotekas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ipoteka', 'url'=>array('index')),
	array('label'=>'Manage Ipoteka', 'url'=>array('admin')),
);
?>

<h1>Create Ipoteka</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>