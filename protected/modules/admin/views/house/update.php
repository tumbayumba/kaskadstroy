<?php
/* @var $this HouseController */
/* @var $model House */

$this->breadcrumbs=array(
	$complex->complex_name=>array('admin','complex_id'=>$complex->id),
	$model->house_name=>array('view','id'=>$model->id),
	'Редактировать',
);

$this->menu=array(
	//array('label'=>'List House', 'url'=>array('index')),
	array('label'=>'Добавить дом', 'url'=>array('create','complex_id'=>$complex->id)),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Все дома', 'url'=>array('admin','complex_id'=>$complex->id)),
);
?>

<h1><?php echo $model->house_name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
