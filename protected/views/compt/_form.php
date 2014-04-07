<?php
/* @var $this ComptController */
/* @var $model Compt */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compt-form',
	'enableAjaxValidation'=>false,
)); ?>

	
	<?php echo $form->errorSummary($model); ?>
	
	<table>
	<tr><td>
	<div style="float:left;">
	<? if($_GET['table_id']==2 || $_GET['table_id']==3) 
	
	{?>
		<div style="margin-bottom:50px;"><? 
					$tehosmtr= Compt::model()->find(array(
					
                            "condition" => "id_particp_model=:id_particp_model and 	attempt=3",
                            "params" => array(":id_particp_model" => $_GET['id']),
					
					));
					?>
					
		<?= "Бал за техосмотр";?>
		<? //= $tehosmtr->tehosmotr;?>
		<? if(isset($tehosmtr->tehosmotr)) { echo $tehosmtr->tehosmotr; } else { ?>
		<?php echo $form->textField($model,'tehosmotr',array('style'=>'width:50px;')); ?>
		<?php echo $form->error($model,'tehosmotr'); ?>
		<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Внести' : 'Save'); ?>
	<?}?>
	</div>
	
	</div><br /><?
	}?>
	<?= "1 попытка";?>
	<?= "Скорость";?>
	<?$compt_one=Compt::model()->findAll('id_particp_model=:id_particp_model',
                           array(':id_particp_model' => $_GET['id'])
										);?>
					<? foreach($compt_one as $values) { if($values->attempt==1) {$mykey=1; $skorost = $values->time_laps;$compt_id=$values->id;} } ?>
	<div class="row">
	<? if(isset($mykey) && $mykey==1) {echo $skorost." км/ч ";
	echo CHtml::link('Редактировать попытку 1',array("compt/update/id/$compt_id")); 
	} else {?>
		
		<?php echo $form->textField($model,'time_laps[1]',array('style'=>'width:50px;')); ?>
		<?php echo $form->error($model,'time_laps[1]'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Внести' : 'Save'); ?>
	</div><?}?>
	</div></td><td>
	<div style="float:left;"> 

	
	<div class="row">
			<?= "2 попытка ";?><?= "Скорость";?>
		<? foreach($compt_one as $valued) { if($valued->attempt==2) {$mykeyd=1; $skorostd = $valued->time_laps; $compt_it=$valued->id;} } ?>
	<div class="row">
	<? if(isset($mykeyd) && $mykeyd==1) {echo $skorostd." км/ч ";
	echo CHtml::link('Редактировать попытку 2',array("compt/update/id/$compt_it"));
	} else {?>
		<?php echo $form->textField($model,'time_laps[2]',array('style'=>'width:50px;')); ?>
		<?php echo $form->error($model,'time_laps[2]'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Внести' : 'Save'); ?>
	</div><?}?>
	</div>
	</td></tr></table>
	
		
<?php $this->endWidget(); ?>

</div><!-- form -->