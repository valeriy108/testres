<?php
/* @var $this ParticpController */
/* @var $model Particp */

$this->breadcrumbs=array(
	'Particps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1>Редактирования данных <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'classmodel'=>$classmodel, 'particp'=>$particp
		)); ?>