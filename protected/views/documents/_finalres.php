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
<div align="center" style="margin-bottom:20px;"><b>Областные соревнования по автомодельному спорту (малые кордовые) 2-3 февраля 2013 года</b></div>
 <div align="center" style="margin-bottom:30px;"><b><div>Таблица результатов</b></div>

<?
	 $partic=Particp::model()->findAll(array(
					
                            'condition' => 'status=1',
                            //'params' => array(':class_model' => $_GET['id']),
					
					));
					$k=1;
					
					foreach($partic as $value)
					{
					$i=1;
					$g=0;while($i<=$k) { 
					if($arraycity[$i]==$value->team)
					{
					$g=1;
					} 
					//echo $g;
					$i++;
					}
					if($g!=1) {
						$arraycity[$k]=$value->team;}
						//echo $arraycity[$k];
						$k++;
					}
	 ?><?
	$team_k = count($arraycity);
	//print_r($arraycity);
	foreach($arraycity as $keycity => $valuecity) {
	// echo $arraycity[$keycity];
	 $class_m=1; while($class_m<=4) {?>
	 <? $comandres=Comandresult::model()->findAll(
	 array(
					
                            'condition' => 'team=:team and model_class=:model_class',
                            'params' => array(':team'=>$arraycity[$keycity], ':model_class'=>$class_m),
					
					));
	  $i=1;
	 foreach($comandres as $valuer)
	 {
	 $arrayres[$i]=$valuer->besttime;
	 //echo $arrayres[$i];
	 $i++;
	 }
	 if(isset($arrayres))
	 {
	 rsort($arrayres);}
	// print_r($arrayres);
	//echo $keycity."-";
	$class_result[$valuecity][$class_m]=$arrayres[0];
	$result = $result+$arrayres[0];
	
	unset($arrayres);
	//echo $class_result[$keycity][$class_m]." ";
	$class_m++;
	}
	$city_name=$arraycity[$keycity];
	$arrayrescity[$city_name]=$result;
	//echo $arrayrescity[$city_name]."<br />";
	unset($result);
	$h++;
	}
	//echo "<br />";
	//print_r($arrayrescity);
	arsort($arrayrescity);
	//print_r($arrayrescity);
	?><table><tr><td>Команда</td><td>АЭ-1</td><td>ЭЛ-0</td><td>ЭЛ-К</td><td>Игрушка</td><td>Сумма балов</td><td>Место</td></tr>
	<?$place=1;
	foreach($arrayrescity as $keyer => $valuer)
	{
	?> <tr><?
	echo "<td>".$keyer."</td>";
	echo "<td>".$class_result[$keyer][1]."</td>";
	echo "<td>".$class_result[$keyer][2]."</td>";
	echo "<td>".$class_result[$keyer][3]."</td>";
	echo "<td>".$class_result[$keyer][4]."</td>";
	echo "<td>".$valuer."</td>";
	echo "<td>".$place."</td>";
	//echo $valuer;
	?> </tr><?$place++;
	} 
	 ?>
	 
	 </table>
	 </body>
</html>