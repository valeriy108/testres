<style>

 table td {
	border:  1px solid;
}



</style>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compt-form',
	'enableAjaxValidation'=>false,
)); ?>
<h2><?=$class_model->name;?></h2>
<? 
$i=1;


foreach($compt as $value)

{
if($_GET['id']==2 || $_GET['id']==3) {
 $competres=Compt::model()->find(array(
					
                            'condition' => 'id_particp_model=:id_particp_model and attempt=3',
                            'params' => array(':id_particp_model' => $value->id_particp_model),
					
					)); 
					$result = $value->best_lap+$competres->tehosmotr;
					}
					else 
					{ $result= $value->best_lap;}
					
$array[$value->id_particp_model]=$result;
//echo $value->id_particp_model."-".$result." ";
$i++;
} 
if(isset($array))
{
  arsort($array);
  }
 // print_r($array);
  ?>
  <?$i=1;?>
  <table>
  <tr><td>№</td><td>Участник</td><td>Команда</td><td>Лучший результат</td><td>Место</td><td>Балы</td>
  <? $place=1;
  $bal=100;
   foreach($array as $key => $valued)
   {?><tr><td><?=$i;?><?$i++;?></td><td><? 
   $partipmod=Particpmodel::model()->findbyPk($key);
   
   $fio=Particp::model()->findbyPk($partipmod->id_particp);
	echo $fio->lastname." ".$fio->firstname." ".$fio->middlename;
	?>
	<?echo CHtml::hiddenField("id[$key]", $fio->id);?>
	</td><td><?echo $fio->team;?><?echo CHtml::hiddenField("team[$key]", $fio->team);?></td><td><?
	echo $valued;
	?><?echo CHtml::hiddenField("besttime[$key]", $valued);?></td><td><?
	echo $place;
	?>
	
	</td><td><?echo $valued;?></td></tr><?
   $place++;}

?>
</table>
<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Внести' : 'Save'); ?>
	</div>
<?php 
$id = $_GET['id'];

echo CHtml::link('Печать результатов',array("documents/index/id/$id/doc/resultclass")); ?>
<?php $this->endWidget(); ?>