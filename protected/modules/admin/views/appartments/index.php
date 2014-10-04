<?php
/* @var $this AppartmentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Appartments',
);

$this->menu=array(
	array('label'=>'Create Appartments', 'url'=>array('create')),
	array('label'=>'Manage Appartments', 'url'=>array('admin')),
);
?>

<h1>Appartments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
