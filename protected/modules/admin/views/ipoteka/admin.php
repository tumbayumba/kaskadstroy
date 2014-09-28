<?php
/* @var $this IpotekaController */
/* @var $model Ipoteka */

$this->breadcrumbs=array(
	'Ипотека'=>array('admin'),
	'Править',
);

$this->menu=array(
	//array('label'=>'List Ipoteka', 'url'=>array('index')),
	array('label'=>'Новая ипотека', 'url'=>array('create')),
);

/*Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ipoteka-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");*/
?>

<h1>Редактировать записи</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
));*/ ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ipoteka-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'name',
		//'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
