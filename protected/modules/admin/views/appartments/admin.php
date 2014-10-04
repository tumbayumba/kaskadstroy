<?php
/* @var $this AppartmentsController */
/* @var $model Appartments */

$this->breadcrumbs=array(
	$complex->complex_name=>array('house/admin','complex_id'=>$house->complex_id),
	'Редактировать',
);

$this->menu=array(
	//array('label'=>'List Appartments', 'url'=>array('index')),
	array('label'=>'Добавить помещение', 'url'=>array('create','house_id'=>$house->id)),
);

/*Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#appartments-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");*/
?>

<h1><?php echo $house->house_name; ?></h1>
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
));*/ ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'appartments-grid',
	'dataProvider'=>$model->mySearch($house->id),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'type_id',
		array(
			'name'=>'type_id',
			'value'=>'CHtml::link(AppartmentsController::getType($data->type_id),array("view","id"=>$data->id),array("style"=>"text-decoration: none;"))',
			'type'=>'raw',
			'filter'=>CHtml::listData(Apptype::model()->findAll(),'id','name'),

		),
		//'house_id',
		'square',
		'price2square',
		'price',
		//'image',
		'action',
		//'is_public',
		array(
			'name'=>'is_public',
			'value'=>'($data->is_public==1)? CHtml::encode("Да") : CHtml::encode("Нет")',
		),
		'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
