<?php
/* @var $this HouseController */
/* @var $model House */

$this->breadcrumbs=array(
	$complex->complex_name=>array('admin','complex_id'=>$complex->id),
	'Добавить дом',
);

$this->menu=array(
	array('label'=>'Все дома', 'url'=>array('admin','complex_id'=>$complex->id)),
	//array('label'=>'Manage House', 'url'=>array('admin')),
);
?>

<h1>Добавить дом</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
