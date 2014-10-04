<?php
/* @var $this HouseController */
/* @var $data House */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complex_id')); ?>:</b>
	<?php echo CHtml::encode($data->complex_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('house_name')); ?>:</b>
	<?php echo CHtml::encode($data->house_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('floorplan_image')); ?>:</b>
	<?php echo CHtml::encode($data->floorplan_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>