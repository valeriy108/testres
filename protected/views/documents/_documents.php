 <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'doc-form',
        'enableAjaxValidation' => false,
            ));
    ?>

<?$dopcument_name = trim($_GET['doc']);?>
        <?php echo CHtml::hiddenfield('type_doc', "$dopcument_name");?> 
   



        <?php echo CHtml::submitButton('Отримати'); ?>
		<?php $this->endWidget(); ?>