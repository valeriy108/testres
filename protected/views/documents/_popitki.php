<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
table td {width:80px;}
 table td {
	border:  1px solid;
}



</style>
<body font face="Times New Roman">
<? 
$particm=ParticpModel::model()->findAll('id_model=:id_model', array(':id_model'=>$_GET['id']));
?>
<div align="center" style="margin-bottom:20px;"><b>Областные соревнования по автомодельному спорту (малые кордовые) 2-3 февраля 2013 года</b></div>
 <div align="center" style="margin-bottom:30px;"><b><div>Класс <?= ClassModel::model()->findbyPk($_GET['id'])->name; ?></b></div>

<table><tr><td>№</td><td>Фамилия, Имя</td><td>1 попытка</td><td>2 попытка</td><td>Лучший результат</td><td>Техком</td>
<? $number=1; foreach($particm as $data) { ?>
<tr><td><?= $number;?></td><td>
<?= Particp::model()->findbyPk($data->id_particp)->lastname;?>
<?= " ";?>
<?= Particp::model()->findbyPk($data->id_particp)->firstname;?>
</td>
<td><?= Compt::model()->find(array(
					
                            "condition" => "id_particp_model=:id_particp_model and 	attempt=1",
                            "params" => array(":id_particp_model" => $data->id),
					
					))->time_laps?></td>
					<td><?= Compt::model()->find(array(
					
                            "condition" => "id_particp_model=:id_particp_model and 	attempt=2",
                            "params" => array(":id_particp_model" => $data->id),
					
					))->time_laps?></td>
					<td><?= Compt::model()->find(array(
					
                            "condition" => "id_particp_model=:id_particp_model and 	attempt=2",
                            "params" => array(":id_particp_model" => $data->id),
					
					))->best_lap?></td><td><?= Compt::model()->find(array(
					
                            "condition" => "id_particp_model=:id_particp_model and 	attempt=3",
                            "params" => array(":id_particp_model" => $data->id),
					
					))->tehosmotr?></td>
					</tr><?$number++;}?>
</table>

</body>
</html>
