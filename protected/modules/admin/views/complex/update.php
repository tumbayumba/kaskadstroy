<?php
/* @var $this ComplexController */
/* @var $model Complex */

$this->breadcrumbs=array(
	'Комплексы'=>array('admin'),
	$model->complex_name=>array('view','id'=>$model->id),
	'Править',
);

$this->menu=array(
	//array('label'=>'List Complex', 'url'=>array('index')),
	array('label'=>'Новый комплекс', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Все комплексы', 'url'=>array('admin')),
);
?>

<h1>Править комплекс - <?php echo $model->complex_name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
