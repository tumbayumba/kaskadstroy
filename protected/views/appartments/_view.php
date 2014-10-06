<?php
/* @var $this AppartmentsController */
/* @var $data Appartments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::encode($data->type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('house_id')); ?>:</b>
	<?php echo CHtml::encode($data->house_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('square')); ?>:</b>
	<?php echo CHtml::encode($data->square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price2square')); ?>:</b>
	<?php echo CHtml::encode($data->price2square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('action')); ?>:</b>
	<?php echo CHtml::encode($data->action); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_public')); ?>:</b>
	<?php echo CHtml::encode($data->is_public); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	*/ ?>

</div>