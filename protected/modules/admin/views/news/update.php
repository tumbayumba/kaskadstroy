<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Новости'=>array('admin'),
	$model->header=>array('view','id'=>$model->id),
	'Править',
);

$this->menu=array(
	//array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Новая запись', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Все записи', 'url'=>array('admin')),
);
?>

<h1>Править запись "<?php echo $model->header; ?>"</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
