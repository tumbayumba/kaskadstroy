<?php
/* @var $this FooterController */
/* @var $model Footer */

$this->breadcrumbs=array(
	'Подвал',
);

if(count($footer)==0){
	$this->menu=array(
		array('label'=>'Новая запись', 'url'=>array('create')),
	);
}
?>

<h1>Редактировать</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'footer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'header',
		'content',
		'adress',
		'phone',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
