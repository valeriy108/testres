<?php
/* @var $this ParticpController */
/* @var $model Particp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'particp-form',
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>
	<div style="float:left;">
	<div style="float:left;">
	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'team'); ?>
		<?php echo $form->textField($model,'team',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'team'); ?>
	</div>

	
	</div>
	<div style="float:right; margin-left:10px;">
	<?php echo $form->labelEx($model,'birthday'); ?>
		<?if(isset($model->datebirth)) {
		$model->datebirth = date('d.m.Y', $model->datebirth);
		}?>
		<?php //echo $form->textField($model,'birthday');
$form->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'attribute' => 'datebirth', //название поля
                        'model' => $model, //модель

                        'language' => 'ru',
                        'options' => array(
                            'showAnim' => 'fade', //весь перечень опций на оф сайте http://jqueryui.com/demos/datepicker/
                            //	'formatDate' =>'YY-MM-DD',

                            'yearRange' => ConfigSite::getCalendar('yearRange'),
                            'maxDate' => ConfigSite::getCalendar('maxDate'),
                            //'maxDate'+=>'0',

                            'changeMonth' => true,
                            'changeYear' => true,
                            'showButtonPanel' => true,
                            'showOtherMonths' => true,
                        ),
                        'htmlOptions' => array(
                            'style' => 'height:20px;'//стили цсс
                        ),
                    ));						
		?>
		
		<?php echo $form->error($model,'birthday'); ?>
<div>
<table style="border:1px solid black;">
<? if(isset($_GET['id'])) {?>
<?
$particmod=ParticpModel::model()->findAll(array(
					
                            'condition' => 'id_particp=:id_particp',
                            'params' => array(':id_particp' => $_GET['id']),
					
					));
foreach($particmod as $valuedm) {
?>
<?echo  ClassModel::model()->findbyPk($valuedm->id_model)->name." ";
echo CHtml::link("Удалить",array('particp/deletecompt','id'=>$valuedm->id));
echo "<br />";
"<br />"; }?>
<? } ?>
<? foreach($classmodel as $value) {
	echo "<tr>";
	echo "<td>";
	echo $value->name;
	echo "</td>";
	echo "<td>";
	echo $form->checkBox($particp,"id_particp[$value->id]"); 
echo "</td>";
	echo "</tr>";	
} ?>
</table>
</div>
<div class="row">
		<?= "Командный зачет"; ?>
		<?php echo $form->checkBox($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Сохранить', array('class'=>'btn')); ?>
	</div>
</div>
</div>
<?$this->menu=array(
	array('label'=>'Список участников', 'url'=>array('index')),
	array('label'=>'Менеджер', 'url'=>array('admin')),
);?>
<?php $this->endWidget(); ?>

</div><!-- form -->