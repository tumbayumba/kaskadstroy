<?php
/* @var $this HouseController */
/* @var $model House */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'house-form',
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
		<?php //echo $form->labelEx($model,'complex_id'); ?>
		<?php //echo $form->textField($model,'complex_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php //echo $form->error($model,'complex_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'house_name'); ?>
		<?php echo $form->textField($model,'house_name',array()); ?>
		<?php echo $form->error($model,'house_name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php (isset($model->image))? $image = $model->image : $image = 'house_default.jpg'; ?>
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/house/'.$image,'',array('height'=>150)); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'floorplan_image'); ?>
		<?php (isset($model->floorplan_image))? $floorplan_image = $model->floorplan_image : $floorplan_image = null; ?>
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/floorplan_image/'.$floorplan_image,'',array('height'=>150)); ?>
		<?php echo $form->fileField($model,'floorplan_image'); ?>
		<?php echo $form->error($model,'floorplan_image'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
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
