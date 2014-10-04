<?php
/* @var $this AppartmentsController */
/* @var $model Appartments */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'appartments-form',
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
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->dropDownList($model,'type_id',CHtml::listData(Apptype::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'house_id'); ?>
		<?php //echo $form->textField($model,'house_id',array('value'=>$house->id)); ?>
		<?php //echo $form->error($model,'house_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'square'); ?>
		<?php echo $form->textField($model,'square',array('size'=>5,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'square'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price2square'); ?>
		<?php echo $form->textField($model,'price2square',array('size'=>5,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'price2square'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>5,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php (isset($model->image))? $image = $model->image : $image = null; ?>
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/complex/'.$house->house_name.'/'.$image,'',array('height'=>150)); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'action'); ?>
		<?php echo $form->textField($model,'action',array()); ?>
		<?php echo $form->error($model,'action'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_public'); ?>
		<?php echo $form->dropDownList($model,'is_public',array('1'=>'Да','0'=>'Нет')); ?>
		<?php echo $form->error($model,'is_public'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
