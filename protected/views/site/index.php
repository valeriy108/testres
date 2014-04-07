<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />

<?php $this->beginWidget('ext.bootstrap.widgets.TbHeroUnit', array(
    /*'heading'=>'Меню',*/
	'htmlOptions'=>array('class'=>'well'),
)); ?>



 
 <table>
    <tr>
        <td><?php echo CHtml::link('<img src="/images/invoice.png"><br />Регистрация',array('particp/create')); ?></td>
     <td><?php echo CHtml::link('<img src="/images/single.png"><br />Соревнования',array('compt/index')); ?></td>
     <td> <?php echo CHtml::link('<img src="/images/trophy.png"><br />Результаты',array('site/result')); ?></td>
    </tr></table>
	
	<p><?php /*$this->widget('ext.bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'large',
        'label'=>'Learn more',
    )); */?></p>

<?php $this->endWidget(); ?>