<?php
/* @var $this ParticpController */
/* @var $model Particp */

$this->breadcrumbs=array(
	'Регистрация'=>array('index'),
	'Созать запись',
);


?>

<h1>Регистрация частника</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'classmodel'=>$classmodel, 'particp'=>$particp)); ?>
