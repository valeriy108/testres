<style>
table td {width:80px;}
 table td {
	border:  1px solid;
}



</style>
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
	 //echo $arraycity[$keycity];
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
	echo "<br />";
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
	 <?=  CHtml::link("Печать",array('documents/index','id'=>$_GET['id'],'doc'=>'finalres'));?>
