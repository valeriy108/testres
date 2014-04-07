<?php
/* @var $this ComptController */
/* @var $model Compt */

$this->breadcrumbs=array(
	'Compts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1>Редактировать запись <?$partcpm=Particpmodel::model()->findbyPk($model->id_particp_model);?><?php echo Particp::model()->findbyPk($partcpm->id_particp)->lastname." ".Classmodel::model()->findbyPk($partcpm->id_model)->name."  попытка ".$model->attempt; ?></h1>

<?php echo $this->renderPartial('_form_update', array('model'=>$model)); ?>
