<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->breadcrumbs=array(
	'Слайдер',
);

$this->menu=array(
	array('label'=>'Новый', 'url'=>array('create')),
);
?>

<h1>Слайдер</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'slider-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
			'name'=>'image',
			'type' => 'raw',
			'value'=>'CHtml::image(Yii::app()->request->baseUrl."/img/slides/".$data->image,"",array("height"=>100))',
		),
		'header',
		//'content',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
