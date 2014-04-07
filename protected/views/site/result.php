<div style="float:center;"> 
<? 
$model=Classmodel::model()->findAll();
foreach($model as $value) {?>

     <div ><?php echo CHtml::link("$value->name",array("site/table_res/id/$value->id")); ?>
	 <?php// echo CHtml::link("$value->name",array("documents/index/id/1/doc/resultclass")); ?>
	</div>
     <?}?>
	  <div ><?php echo CHtml::link("Командные результаты",array("site/comand_res")); ?></div>
	 
    </div>
	<br />
	<div>
	<?=  CHtml::link("Очистить базу с результатами",array('site/deletebd','delete'=>1));?>

	</div>
	
	