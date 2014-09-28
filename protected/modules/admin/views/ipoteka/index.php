<?php
/* @var $this IpotekaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ipotekas',
);

$this->menu=array(
	array('label'=>'Create Ipoteka', 'url'=>array('create')),
	array('label'=>'Manage Ipoteka', 'url'=>array('admin')),
);
?>

<h1>Ipotekas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
