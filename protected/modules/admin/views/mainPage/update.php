<?php
/* @var $this MainPageController */
/* @var $model MainPage */

$this->breadcrumbs=array(
	'Главная страница'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Править',
);

$this->menu=array(
	//array('label'=>'List MainPage', 'url'=>array('index')),
	array('label'=>'Новая запись', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Все записи', 'url'=>array('admin')),
);
?>

<h1>Редактировать запись <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
