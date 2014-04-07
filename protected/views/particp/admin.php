<?php
/* @var $this ParticpController */
/* @var $model Particp */

$this->breadcrumbs=array(
	'Particps'=>array('index'),
	'Manage',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#particp-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список участников</h1>



<?php echo CHtml::link('ПОИСК ПО УЧАСТНИКАМ','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'particp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'lastname',
		'firstname',
		 array(
		'name'=>'id', 
		'header'=>'Дата рождения',
		'value'=>"date('d.m.Y'$data->datebirth)",
		),
		'team',
		array(
		 
		'header'=>'Зачет',
		'class' => 'ext.Status',
		
		),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<?=  CHtml::link("Печать",array('documents/index','id'=>$_GET['id'],'doc'=>'fullist'));?>
