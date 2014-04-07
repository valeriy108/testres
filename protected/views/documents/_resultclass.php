<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<script  src="/js/jquery-1.7.2.min.js"/>-->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>HTML документ</title>
<style>

 table td {
	border:  1px solid;
}



</style>
</head>

<body font face="Times New Roman" >

<div align="center" style="margin-bottom:20px;"><b>Областные соревнования по автомодельному спорту (малые кордовые) 2-3 февраля 2013 года</b></div>
 <div align="center" style="margin-bottom:30px;"><b><div>Класс <?= ClassModel::model()->findbyPk($_GET['id'])->name; ?></b></div>

<? 
$compt=Compt::model()->findAll(array(
					
                            'condition' => 'class_model=:class_model and attempt=2',
                            'params' => array(':class_model' => $_GET['id']),
					
					));
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
//echo $value->id_particp_model." ";
$i++;
} 
if(isset($array)) {
  arsort($array);}
  ?>
  <table>
  <tr><td>Участник</td><td>Команда</td><td>Лучший результат</td><td>Балы</td><td>Место</td>
  <? $place=1;
  $bal=100;
   foreach($array as $key => $valued)
   {?><tr><td><?
   $partipmod=Particpmodel::model()->findbyPk($key);
   
   $fio=Particp::model()->findbyPk($partipmod->id_particp);
	echo $fio->lastname." ".$fio->firstname;
	?></td><td><?echo $fio->team;?></td><td><?
	echo $valued;
	?></td><td><?
	echo round($valued);
	?></td><td><?
	echo $place;
	?></td></tr><?
   $place++;}

?>
</table>
</body>
</html>
