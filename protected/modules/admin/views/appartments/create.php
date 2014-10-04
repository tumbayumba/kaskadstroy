<?php
/* @var $this AppartmentsController */
/* @var $model Appartments */

$this->breadcrumbs=array(
	$house->house_name=>array('admin','house_id'=>$house->id),
	'Новое помещение',
);

$this->menu=array(
	//array('label'=>'List Appartments', 'url'=>array('index')),
	array('label'=>'Все помещения', 'url'=>array('admin','house_id'=>$house->id)),
);
?>

<h1><?php echo $house->house_name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'house'=>$house)); ?>
