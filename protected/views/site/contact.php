<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */
?>

<div class="l-main">
	<div class="l-main-h">
		
		<div class="l-submain for_pagehead">
			<div class="l-submain-h g-html i-cf">
				<div class="w-pagehead">
					<h1>Контакты</h1>
				</div>
			</div>
		</div>
		
		<div class="l-submain">
			<div class="l-submain-h g-html i-cf">

<h1>Свяжитесь с нами</h1>
				<div class="g-cols">
					<div class="one-third">
						<div class="w-contacts">
									<div class="w-contacts-h">
										<dl class="w-contacts-list">
											<dt class="w-contacts-list-key for_address">Адресс:</dt>
											<dd class="w-contacts-list-value">117342, г. Москва, ул. Обручева, д. 46</dd>
											<dt class="w-contacts-list-key for_phone">Тел./факс:</dt>
											<dd class="w-contacts-list-value">(495) 788-86-86,<br>(495) 334-19-90</dd>
											<!--<dt class="w-contacts-list-key for_email">Email:</dt>
											<dd class="w-contacts-list-value"><a href="mailto:info@example.com">info@example.com</a></dd>-->
										</dl>
									</div>
						</div>
					</div>
					<div class="two-thirds">
					
<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'htmlOptions'=>array('class'=>'g-form'),
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="g-form-group">
		<div class="g-form-group-rows">
			<div class="g-form-row">
				<div class="g-form-row-label">
					<?php echo $form->labelEx($model,'Имя',array('class'=>'g-form-row-label-h')); ?>
				</div>
				<div class="g-input">
					<?php echo $form->textField($model,'name'); ?>
				</div>
				<?php echo $form->error($model,'name'); ?>
			</div>

			<div class="g-form-row">
				<div class="g-form-row-label">
					<?php echo $form->labelEx($model,'email',array('class'=>'g-form-row-label-h')); ?>
				</div>
				<div class="g-input">
					<?php echo $form->textField($model,'email',array('class'=>'g-form-row-label-h')); ?>
				</div>
				<?php echo $form->error($model,'email'); ?>
			</div>

			<div class="g-form-row">
				<div class="g-form-row-label">
					<?php echo $form->labelEx($model,'Тема',array('class'=>'g-form-row-label-h')); ?>
				</div>
				<div class="g-input">
					<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
				</div>
				<?php echo $form->error($model,'subject'); ?>
			</div>

			<div class="g-form-row">
				<div class="g-form-row-label">
					<?php echo $form->labelEx($model,'Сообщение',array('class'=>'g-form-row-label-h')); ?>
				</div>
				<div class="g-input">
					<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
				</div>
				<?php echo $form->error($model,'body'); ?>
			</div>

			<?php /*if(CCaptcha::checkRequirements()): ?>
			<div class="g-form-row">
				<div class="g-form-row-label">
					<?php echo $form->labelEx($model,'verifyCode',array('class'=>'g-form-row-label-h')); ?>
				</div>
				<div>
				<div class="g-input">
					<?php $this->widget('CCaptcha'); ?>
				</div>
				<div class="g-input">
					<?php echo $form->textField($model,'verifyCode'); ?>
				</div>
				</div>
				<div class="hint">Пожалуйста, введиту буквы, которые изображены вверху.Please enter the letters as they are shown in the image above.
				<br/>Letters are not case-sensitive.</div>
				<?php echo $form->error($model,'verifyCode'); ?>
			</div>
			<?php endif; */?>

			<div class="row buttons">
				<?php echo CHtml::submitButton('Отправить',array('class'=>'g-btn type_color')); ?>
			</div>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
						
					</div>
				</div>

			</div>
		</div>
	
	</div>
</div>
