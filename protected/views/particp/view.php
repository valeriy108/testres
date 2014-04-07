<?php
/* @var $this ParticpController */
/* @var $model Particp */

$this->breadcrumbs=array(
	'Particps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Particp', 'url'=>array('index')),
	array('label'=>'Create Particp', 'url'=>array('create')),
	array('label'=>'Update Particp', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Particp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Particp', 'url'=>array('admin')),
);
?>

<h1>View Particp #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lastname',
		'firstname',
		'middlename',
		'team',
		'status',
	),
)); ?>
