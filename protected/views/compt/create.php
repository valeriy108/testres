<?php
/* @var $this ComptController */
/* @var $model Compt */

$this->breadcrumbs=array(
	'Compts'=>array('index'),
	'Create',
);
?>

<h1>Внести данные</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>