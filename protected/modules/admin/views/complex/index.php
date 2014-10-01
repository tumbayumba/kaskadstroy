<?php
/* @var $this ComplexController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Complexes',
);

$this->menu=array(
	array('label'=>'Create Complex', 'url'=>array('create')),
	array('label'=>'Manage Complex', 'url'=>array('admin')),
);
?>

<h1>Complexes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
