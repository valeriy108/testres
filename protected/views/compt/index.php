<?php
/* @var $this ComptController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Compts',
);


?>

<h1>Классы моделей</h1>

<div style="float:center;"> 
		<? 
		$model=Classmodel::model()->findAll();
			foreach($model as $value) {?>
				<div>
				<?php echo CHtml::link($value->name,array("compt/table/id/$value->id")); ?>
				</div>
     <? } ?>
    </div>
