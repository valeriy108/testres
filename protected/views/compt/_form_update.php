<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compt-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->textField($model,'time_laps',array('style'=>'width:50px;')); ?>
		<?php echo $form->error($model,'time_laps'); ?>
		<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Внести' : 'Save'); ?>
		<?php $this->endWidget(); ?>