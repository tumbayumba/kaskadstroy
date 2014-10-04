<?php
/* @var $this AppartmentsController */
/* @var $model Appartments */

$this->breadcrumbs=array(
	$house->house_name=>array('admin','house_id'=>$house->id),
	$model->square,
);

$this->menu=array(
	//array('label'=>'List Appartments', 'url'=>array('index')),
	array('label'=>'Новое помещение', 'url'=>array('create','house_id'=>$house->id)),
	array('label'=>'Править', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Все помещения', 'url'=>array('admin','house_id'=>$house->id)),
);
?>

<h1><?php echo $model->square; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		//'type_id',
		array(
			'name'=>'type_id',
			'value'=>AppartmentsController::getType($model->type_id),
		),
		//'house_id',
		array(
			'name'=>'house_id',
			'value'=>$house->house_name,
		),
		'square',
		'price2square',
		'price',
		//'image',
		'action',
		//'is_public',
		array(
			'name'=>'is_public',
			'value'=>($model->is_public==1)? CHtml::encode("Да") : CHtml::encode("Нет"),
		),
		'description',
	),
)); ?>
