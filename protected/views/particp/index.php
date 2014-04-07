<?php
/* @var $this ParticpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Particps',
);

$this->menu=array(
	array('label'=>'Create Particp', 'url'=>array('create')),
	array('label'=>'Manage Particp', 'url'=>array('admin')),
);
?>

<h1>Particps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
