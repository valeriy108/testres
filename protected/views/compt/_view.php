<?php
/* @var $this ComptController */
/* @var $data Compt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_particp_model')); ?>:</b>
	<?php echo CHtml::encode($data->id_particp_model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numb')); ?>:</b>
	<?php echo CHtml::encode($data->numb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('result')); ?>:</b>
	<?php echo CHtml::encode($data->result); ?>
	<br />


</div>