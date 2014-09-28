<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

/*$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);*/
?>


<div class="l-main-h">
    <div class="l-submain for_pagehead">
        <div class="l-submain-h i-cf">
			<div class="element animate_afr">
				<h1>Вход</h1>
			</div>
<!-- Page head content (this section is optional) -->
		</div>
	</div>
	<div class="l-submain">
		<div class="l-submain-h">
<!-- Page content -->
			<div class="element animate_afc">
				<div class="g-cols">
					<div class="three-quarters">

						<!--<p>Please fill out the following form with your login credentials:</p>-->

						<div class="form">
						<?php $form=$this->beginWidget('CActiveForm', array(
							'id'=>'login-form',
							'enableClientValidation'=>true,
							'clientOptions'=>array(
								'validateOnSubmit'=>true,
							),
						)); ?>

							<p class="note">Поля с <span class="required">*</span> обязательны.</p>

							<div class="row">
								<?php echo $form->labelEx($model,'username'); ?>
								<?php echo $form->textField($model,'username'); ?>
								<?php echo $form->error($model,'username'); ?>
							</div>

							<div class="row">
								<?php echo $form->labelEx($model,'password'); ?>
								<?php echo $form->passwordField($model,'password'); ?>
								<?php echo $form->error($model,'password'); ?>
							</div>

							<div class="row rememberMe">
								<?php echo $form->checkBox($model,'rememberMe'); ?>
								<?php echo $form->label($model,'rememberMe'); ?>
								<?php echo $form->error($model,'rememberMe'); ?>
							</div>

							<div class="row buttons">
								<?php echo CHtml::submitButton('Войти'); ?>
							</div>

						<?php $this->endWidget(); ?>
						</div><!-- form -->
					</div>
					
				</div>
			</div>
			
			
		</div>
	</div>
</div>
