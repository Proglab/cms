<?php
/* @var $this PagesWidgetsController */
/* @var $data PagesWidgets */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pages_id')); ?>:</b>
	<?php echo CHtml::encode($data->pages_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('widgets_id')); ?>:</b>
	<?php echo CHtml::encode($data->widgets_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spot')); ?>:</b>
	<?php echo CHtml::encode($data->spot); ?>
	<br />


</div>