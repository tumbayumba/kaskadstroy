<?php
/* @var $this StagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stages',
);

$this->menu=array(
	array('label'=>'Create Stages', 'url'=>array('create')),
	array('label'=>'Manage Stages', 'url'=>array('admin')),
);
?>

<h1>Stages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
