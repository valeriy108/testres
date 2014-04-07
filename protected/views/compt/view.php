<?php
/* @var $this ComptController */
/* @var $model Compt */

$this->breadcrumbs=array(
	'Compts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Compt', 'url'=>array('index')),
	array('label'=>'Create Compt', 'url'=>array('create')),
	array('label'=>'Update Compt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Compt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Compt', 'url'=>array('admin')),
);
?>

<h1>View Compt #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_particp_model',
		'numb',
		'result',
	),
)); ?>
