<?php
/* @var $this IpotekaController */
/* @var $model Ipoteka */

$this->breadcrumbs=array(
	'Ипотека'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Править',
);

$this->menu=array(
	//array('label'=>'List Ipoteka', 'url'=>array('index')),
	array('label'=>'Новая ипотека', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Все записи', 'url'=>array('admin')),
);
?>

<h1>Править <?php echo '"'.$model->name.'"'; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
