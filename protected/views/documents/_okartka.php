<!-- saved from url=(0076)https://ias.mdpu.org.ua/priemnaya/druk/druk_2.php?doc=tup_ygoda&id=900011951 -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <style>
            .punkt
{
font-weight: bold;
/*font-size:larger;*/
}
.named
{
    font-weight: bold;
     /*margin-top: 0.1em;*/ /* Отступ сверху */
    /*margin-bottom: 0.1em; */
}
/*.left
{
   float:left; 
    width:320px;  
}
.right
{
    float:right; 
    width:320px;
}*/
p
{
  
     margin-top: 0.01em; /* Отступ сверху */
    margin-bottom: 0.01em; /* Отступ снизу */
}
.paragr
{
    text-indent: 5px;
}

.error
{
/*color:red;*/
}

.error2
{
/*color:green;*/
}
        </style>
    </head>
    
    <body font face="Times New Roman">
	<? $s_id=$_GET['id']; ?>
<? $person = Yii::app()->db->createCommand()
    ->select('firstmane, lastname, middlename, spassport, npassport,  whopasspotr, whenpassport, street, nhouse, city, tel')
    ->from('student')
    //->join('tbl_profile p', 'u.id=p.user_id')
    ->where('id=:id', array(':id'=>(int)$s_id))
    ->queryRow(); ?>
	
	<? $request = Yii::app()->db->createCommand()
    ->select('facultet_id, level')
    ->from('request')
    //->join('tbl_profile p', 'u.id=p.user_id')
    ->where('student_id=:s_id', array(':s_id'=>(int)$s_id))
    ->queryRow(); ?>
	
	<? //= $request['facultet_id']; ?>
	<? $fac_id=$request['facultet_id']; ?>
	<? $facultet = Yii::app()->db->createCommand()
    ->select('caption')
    ->from('facultet')
    //->join('tbl_profile p', 'u.id=p.user_id')
    ->where('id=:id', array(':id'=>(int)$fac_id))
    ->queryRow(); ?>
	
	<? $fac_id=$request['facultet_id']; ?>
	<? $galuz = Yii::app()->db->createCommand()
    ->select('id, caption')
    ->from('galuz')
    //->join('tbl_profile p', 'u.id=p.user_id')
    ->where('id=:id', array(':id'=>(int)$fac_id))
    ->queryRow(); ?>
	
	<? $fac_id=$request['facultet_id'];
		$gal_id=$galuz['id'];	?>
	<? $naprym = Yii::app()->db->createCommand()
    ->select('id, code, caption')
    ->from('naprym')
    //->join('tbl_profile p', 'u.id=p.user_id')
    ->where('galuz_id=:id', array(':id'=>(int)$gal_id))
    ->queryRow(); ?>
    <? $nap_id=$naprym['id'];?> 
    <? $special = Yii::app()->db->createCommand()
    ->select('caption')
    ->from('specialty')
    //->join('tbl_profile p', 'u.id=p.user_id')
    ->where('naprym_id=:id', array(':id'=>(int)$nap_id))
    ->queryRow(); ?> 
       <div align="center" class="punkt">ТИПОВА УГОДА</div>
<div align="center" class="named">про підготовку фахівців з вищою освітою<br />
Мелітопольського державного педагогічного університу імені Богдана Хмельницького  який підпорядкований МОНУ</div>
<table width="536">
<tr><td width="219" align="left">№____________________</td> 
<td width="309" align="right">  "______" ___________ ________ р.</div></td>
</tr></table>
     <div><p>в особі керівника <u> Ректора професора Молодиченко В.В.</u></p>
        <p>та студента
         <?  $stud=Student::model()->findByPk($_GET['id']); 
   
  /* foreach ($stud as $value) {
       $exam_find=  Student::model()->findByPk($value);
       $exam_info[]=array(
          'lastname'=>$exam_find->lastname,
		   'firstmane'=>$exam_find->firstmane,
		    'middlename'=>$exam_find->middlename,
       );
     
   }*/  
    //print_r($exam_info); ?>
	<?  $req=Request::model()->findByPk($_GET['reg_id']); ?>
	<?  $facul=Facultet::model()->findByPk($req->facultet_id); ?>
	<?  $galuz=Galuz::model()->findByPk($req->galuz_id); ?>
	<?  $naprym=Naprym::model()->findByPk($req->naprym_id); ?>
	<?  $special=Specialty::model()->findByPk($req->specialization_id); ?>
	<u> <?= $stud->lastname;?>  <?= $stud->firstmane;?>  <?= $stud->middlename;?></u></p>
    <p>факультет <u><?= $facul->caption; ?></u></p>
<p>галузь знань <u><?= $galuz->caption; ?></u></p>
<p>напрям підготовки <u><?= $naprym->code; ?> <?= $naprym->caption; ?></u></p>
<p>спеціальність (спеціалізація) <u><span class="error"><?= $special->caption; ?></span></u></p>
<p>підготовка за освітньо-кваліфікаційним рівнем <u><?php if($req->level=="6")
	{ 
	echo "бакалавр";
	}
	if($request['level']=="7")
	{ 
	echo "спеціаліст";
	}
	if($request['level']=="8")
	{ 
	echo "магістр";
	}
	?></u><br>
    уклали цю угоду про наступне:</p></div>

<div>1.Вищий навчальний заклад зобов’язується забезпечити:</div>
<p class="paragr"> якісну теоретичну і практичну підготовку фахівця з вищою освітою 
згідно з навчальними планами та програмами і вимогами кваліфікаційних 
характеристик фахівця;</p>
<p class="paragr"> після закінчення навчання та одержання відповідної кваліфікації місцем 
працевлаштування в державному секторі народного господарства, де він 
зобов’язаний відпрацювати не менше трьох років.</p>

<div>2.Студент зобов’язується:</div>
<p class="paragr"> оволодіти всіма видами професійної діяльності, передбаченими 
відповідною кваліфікаційною характеристикою фахівця за напрямом 
підготовки <u><?= $naprym->code; ?> <?= $naprym->caption; ?></u></p>

<p class="paragr"> прибути після закінчення вищого навчального закладу на місце 
    направлення і відпрацювати не менше трьох років, відповідно до Пост. КНУ від 22.08.1996 р. №992</p>

<p class="paragr"> у разі відмови прибути за призначенням відшкодувати до державного 
    бюджету вартість навчання в установленому порядку.</p>

<div>3.Інші положення:</div>
<p class="paragr"> зміни та доповнення до цієї угоди вносяться шляхом підписання 
    додаткових угод;</p>
<p class="paragr"> дія угоди припиняється за згодою сторін (оформляється протоколом);
(наказ по вузу, призначення членів комісії, які будуть входити 
до оформлення протоколу, з яких умов припиняється дія угоди)</p>
<p class="paragr"> усі спори, які можуть виникати між сторонами, виріщуються в судовому 
    порядку.</p>
<p class="paragr"> Угода набирає чинності з моменту підписання і діє до „ ______“  _________________ 20___ р. </p>
<p class="paragr"> Угоду складено у двох примірниках, які зберігаються у кожної із сторін і 
мають однакову юридичну силу.</p>

<div>4.Юридичні адреси сторін:</div> 
<p class="paragr">Мелітопольський державний педагогічний університет імені Богдана Хмельницького <u>Запорізька обл., вул. Леніна, 20 72312, т 440464</u></p>
<p class="paragr">розрахунковий рахунок <u>р\р 35223001000218 МФО 813015 банк ГУДКУ в Запорізька обл код ОКПО 02125237</u></p>
<p class="paragr">Студент <u><?= $stud->street; ?>, <?= $stud->nhouse; ?>, <?= $stud->city; ?>  75441</span>, <?= $stud->tel; ?></u></p>
<p class="paragr">паспорт <u>серія: <?= $stud->spassport; ?> та №:<?= $stud->npassport; ?> виданий: <?= $stud->whopasspotr; ?>,  <?= $stud->whenpassport; ?></u></p>
<table width="536">
  <tr><td width="247" align="left"><div class="left">Ректор _____________ <br />Головний бухгалтер ____________ </div></td>
<td width="277" align="right"><div align="right" class="right">Студент _______________ <br />„ ______“ _________________ 20___ р.</div></td>
</tr>
</table>
</body>
    </html>