<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
	
	public function actionComand_res()
	{
	$this->render('comand_res');
	}
	
	public function actionResult()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
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
					$k_city=count($arraycity);
					$city_id=1;
					/*while($city_id <= $k_city) {
					$particmod=Particpmodel::model()->findAll();
					foreach($particmod as $value_res) 
					{
						$particp=Particp::model()->findbyPk($value_res->id_particp);
						
							if($particp->team==$arraycity[$city_id] && $particp->status==1)
							{
							
								$competition=Compt::model()->find(array(
					
                            'condition' => 'class_model=1 AND id_particp_model=:id_particp_model and attempt=2',
                            'params' => array(':id_particp_model' => $value_res->id),
					
					));
					//echo $competition->best_lap;
					if(isset($competition->best_lap)) { $arraybestlaps[$competition->id]=$competition->best_lap; }
					}
					}
					if(isset($arraybestlaps)) {
					arsort($arraybestlaps);
					//print_r($arraybestlaps);
					
						$one=1;					
					foreach($arraybestlaps as $keyd => $sortvalue) {
					if($one=1) { $arrayres[1]=$sortvalue; }
					$one++;
					//if($city_id==2) {echo $arrayres[1];}
					}}
					//echo "<==>";
					//print_r($arrayres[1]);
					$particmod=Particpmodel::model()->findAll();
					foreach($particmod as $value_res) 
					{
					$particp=Particp::model()->findbyPk($value_res->id_particp);
						
							if($particp->team==$arraycity[$city_id] && $particp->status==1)
							{
					$competition=Compt::model()->find(array(
					
                            'condition' => 'class_model=2 AND id_particp_model=:id_particp_model and attempt=2',
                            'params' => array(':id_particp_model' => $value_res->id),
					
					));
					$competeh=Compt::model()->find(array(
					
                            'condition' => 'class_model=2 AND id_particp_model=:id_particp_model and attempt=3',
                            'params' => array(':id_particp_model' => $value_res->id),
					
					));
					//echo $value_res->id." ";
					if(isset($competition->best_lap)) { $arraybestlaps[$competition->id]=$competition->best_lap + $competeh->tehosmotr; }
					}
					}
					if(isset($arraybestlaps)) {
					arsort($arraybestlaps);
						$one=1;					
					foreach($arraybestlaps as $keyd => $sortvaluetwo) {
					if($one=1) { $arrayres[1]=$sortvaluetwo; }
					
					
					}}
						
					$particmod=Particpmodel::model()->findAll();
					foreach($particmod as $value_res) 
					{
					$particp=Particp::model()->findbyPk($value_res->id_particp);
						
							if($particp->team==$arraycity[$city_id] && $particp->status==1)
							{
					$competition=Compt::model()->find(array(
					
                            'condition' => 'class_model=3 AND id_particp_model=:id_particp_model and attempt=2',
                            'params' => array(':id_particp_model' => $value_res->id),
					
					));
					$competeh=Compt::model()->find(array(
					
                            'condition' => 'class_model=3 AND id_particp_model=:id_particp_model and attempt=3',
                            'params' => array(':id_particp_model' => $value_res->id),
					
					));
					//echo $value_res->id." ";
					if(isset($competition->best_lap)) { $arraybestlaps[$competition->id]=$competition->best_lap + $competeh->tehosmotr; }
					}}
					if(isset($arraybestlaps)) {
					arsort($arraybestlaps);
						$one=1;					
					foreach($arraybestlaps as $keyd => $sortvaluethree) {
					if($one=1) { $arrayres[1]=$sortvaluethree; }
					
					
					}}
					$particmod=Particpmodel::model()->findAll();
					foreach($particmod as $value_res) 
					{
					$particp=Particp::model()->findbyPk($value_res->id_particp);
						
							if($particp->team==$arraycity[$city_id] && $particp->status==1)
							{
					$competition=Compt::model()->find(array(
					
                            'condition' => 'class_model=4 AND id_particp_model=:id_particp_model and attempt=2',
                            'params' => array(':id_particp_model' => $value_res->id),
					
					));
				
					//echo $value_res->id." ";
					if(isset($competition->best_lap)) { $arraybestlapsfour[$competition->id]=$competition->best_lap; }
						}}	
						
					
					if(isset($arraybestlapsfour)) {
					arsort($arraybestlapsfour);
						$two=1;					
					foreach($arraybestlapsfour as $keydtwo => $sortvaluefour) {
					if($two=1) { $arrayres[4]=$sortvaluefour; }
					$two++;
					
					}}
					
					$arrayres_final[$city_id]=$arrayres;
					$city_id++;
					unset($arrayres);
					//print_r($arrayres);
					}
						print_r($arrayres_final);
		*/
		$this->render('result');
	}
	
	public function actionTable_res()
	{
		$compt= new Compt;
		$class_model = ClassModel::model()->findbyPk($_GET['id']);
		if(isset($_POST['yt0']))
		{
		
		
		$id_particp = $_POST['id'];
		
		foreach($id_particp as $keyd => $valued)
		{
			//echo $keyd;
			$parti=Particp::model()->findbyPk($valued);
			if($parti->status==1) {
			$id_team = $_POST['team'][$keyd];
			$id_besttime = $_POST['besttime'][$keyd];
			//print_r($id_besttime);
			
			$command = Yii::app()->db->createCommand();
			$command->insert('comand_result', array(
									'id_particp'=>$valued,
									'team'=>$id_team,
									'besttime'=>$id_besttime,
									'model_class'=>$_GET['id'],
									));
									}
		}
		
		}
		if(isset($_GET['id'])) {
		
		$compt=Compt::model()->findAll(array(
					
                            'condition' => 'class_model=:class_model and attempt=2',
                            'params' => array(':class_model' => $_GET['id']),
					
					));
					
		
		
		}
		//exit;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('table_res', array('compt'=>$compt, 'class_model'=>$class_model));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	public function actionDeletebd()
	{
		
		Comandresult::model()->deleteAll();
		$this->redirect(Yii::app()->homeUrl);
	}
	
}