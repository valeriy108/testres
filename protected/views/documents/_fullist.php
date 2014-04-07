<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

 table td {
	border:  1px solid;
}



</style>
</head>
<body font face="Times New Roman">
<div align="center" style="margin-bottom:20px;"><b>Областные соревнования по автомодельному спорту (малые кордовые) 2-3 февраля 2013 года</b></div>
 <div align="center" style="margin-bottom:30px;"><b><div>Список участников</b></div>
<?
$compt=Particp::model()->findAll(array(
					
                            //'condition' => 'class_model=:class_model and attempt=3',
                           // 'params' => array(':class_model' => $_GET['id']),
							'order' => 'id'
					));?>
					<table >
					<tr><td>Фамилия, Имя</td><td>Дата рождения</td><td>Команда</td><td>Класс моделей</td><td>Зачет</td></tr>
					<? foreach($compt as $value)
	{
	?>
	<tr style="width:500px;"><td><? echo $value->lastname." ".$value->firstname;?></td><td><?= date('d.m.Y', $value->datebirth);?></td><td><?= $value->team;?></td>
	
	<td><? $particm=ParticpModel::model()->findAll('id_particp=:id_particp', array(':id_particp'=>$value->id));?>
	<? foreach($particm as $valued) {
	echo ClassModel::model()->findbyPk($valued->id_model)->name;
	echo " ";
	} ?>
	</td>
	<td><? if($value->status=="1"){ echo "К";} else {echo "Л";}?></td>
	</tr>
	<?	
	}					?></table>
</body>
</html>
