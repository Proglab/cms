<?php
/* @var $this PagesWidgetsController */
/* @var $model PagesWidgets */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pages-widgets-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pages_id'); ?>
		<?php echo $form->textField($model,'pages_id'); ?>
		<?php echo $form->error($model,'pages_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'widgets_id'); ?>
		<?php echo $form->textField($model,'widgets_id'); ?>
		<?php echo $form->error($model,'widgets_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position'); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spot'); ?>
		<?php echo $form->textField($model,'spot',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'spot'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->