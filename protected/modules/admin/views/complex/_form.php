<?php
/* @var $this ComplexController */
/* @var $model Complex */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'complex-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'complex_name'); ?>
		<?php echo $form->textArea($model,'complex_name',array('rows'=>3, 'cols'=>50)); ?>
		<?php echo $form->error($model,'complex_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adress'); ?>
		<?php echo $form->textArea($model,'adress',array('rows'=>3, 'cols'=>50)); ?>
		<?php echo $form->error($model,'adress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'driveway_image'); ?>
		<?php (isset($model->driveway_image))? $driveway_image = $model->driveway_image : $driveway_image = null; ?>
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/driveway_image/'.$driveway_image,'',array('height'=>150)); ?>
		<?php echo $form->fileField($model,'driveway_image'); ?>
		<?php echo $form->error($model,'driveway_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php (isset($model->image))? $image = $model->image : $image = null; ?>
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/complex/'.$image,'',array('height'=>150)); ?>
		<?php echo $form->fileField($model,'image').' Рекомендуется 1000x500 '; ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php //echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php
		$this->widget('ext.ckeditor.CKEditor',array(
		  "model"=>$model,                 # Data-Model
		  "attribute"=>'description',          # Attribute in the Data-Model
		  ));
		?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
