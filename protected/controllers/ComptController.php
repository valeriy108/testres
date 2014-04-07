<?php

class ComptController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'table'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete'),
				'users'=>array('*'),
			),
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),*/
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Compt;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Compt']))
		{
		//print_r($_POST);
		//exit;
		if(isset($_POST['yt0']) && isset($_POST['Compt']['tehosmotr']))
		{
		
		$model->attributes=$_POST['Compt'];
		
		$command = Yii::app()->db->createCommand();
		$command->insert('compt', array(
		'id_particp_model'=>$_GET['id'],
		//'numb'=>$model->numb,
		//'time_laps'=>$model->time_laps,
		'attempt'=>3,
		//'best_lap'=>$model->time_laps,
		'class_model'=>$_GET['table_id'],
		'tehosmotr'=>$_POST['Compt']['tehosmotr'],
				));
		
				$this->redirect(array('table','id'=>$_GET['table_id']));
		}
		
		if(isset($_POST['yt0']) && isset($_POST['Compt']['time_laps']['1']))
		{
		
		$model->attributes=$_POST['Compt'];
		$model->numb=$_POST['Compt']['numb']['1'];
		$model->time_laps=$_POST['Compt']['time_laps']['1'];
		$command = Yii::app()->db->createCommand();
		$command->insert('compt', array(
		'id_particp_model'=>$_GET['id'],
		//'numb'=>$model->numb,
		'time_laps'=>$model->time_laps,
		'attempt'=>1,
		'best_lap'=>$model->time_laps,
		'class_model'=>$_GET['table_id'],
				));
		
				$this->redirect(array('table','id'=>$_GET['table_id']));
		
		}
		
		if(isset($_POST['yt0']) && isset($_POST['Compt']['time_laps']['2']))
		{
		$model->attributes=$_POST['Compt'];
		$model->numb=$_POST['Compt']['numb']['2'];
		$model->time_laps=$_POST['Compt']['time_laps']['2'];
		$compt=Compt::model()->find(array(
					
                            'condition' => 'id_particp_model=:id_particp_model and attempt=1',
                            'params' => array(':id_particp_model' => $_GET['id']),
					
					));
					if($compt->time_laps>=$model->time_laps)
					{
						$best_time = $compt->time_laps;
					}
					else
					{
						$best_time = $model->time_laps;
					}
		$command = Yii::app()->db->createCommand();
		$command->insert('compt', array(
		'id_particp_model'=>$_GET['id'],
		//'numb'=>$model->numb,
		'time_laps'=>$model->time_laps,
		'attempt'=>2,
		'best_lap'=>$best_time,
		'class_model'=>$_GET['table_id'],
				));
		
				$this->redirect(array('table','id'=>$_GET['table_id']));
		
		}
		
		if(isset($_POST['yt0']) && empty($_POST['Compt']['tehosmotr']))
		{
		$model->attributes=$_POST['Compt'];
		$model->numb=$_POST['Compt']['numb']['1'];
		$model->time_laps=$_POST['Compt']['time_laps']['1'];
		$command = Yii::app()->db->createCommand();
		$command->insert('compt', array(
		'id_particp_model'=>$_GET['id'],
		//'numb'=>$model->numb,
		'time_laps'=>$model->time_laps,
		'attempt'=>1,
		'best_lap'=>$model->time_laps,
		'class_model'=>$_GET['table_id'],
				));
		
				$this->redirect(array('table','id'=>$_GET['table_id']));
		
		}
		
		
		if(isset($_POST['yt1'])  && isset($_POST['Compt']['time_laps']['1']))
		{
		
		$model->attributes=$_POST['Compt'];
		$model->numb=$_POST['Compt']['numb']['1'];
		$model->time_laps=$_POST['Compt']['time_laps']['1'];
		$command = Yii::app()->db->createCommand();
		$command->insert('compt', array(
		'id_particp_model'=>$_GET['id'],
		//'numb'=>$model->numb,
		'time_laps'=>$model->time_laps,
		'attempt'=>1,
		'best_lap'=>$model->time_laps,
		'class_model'=>$_GET['table_id'],
				));
		
				$this->redirect(array('table','id'=>$_GET['table_id']));
		}
		
		if(isset($_POST['yt1'])  && isset($_POST['Compt']['time_laps']['2']))
		{
		
		$model->attributes=$_POST['Compt'];
		//$model->numb=$_POST['Compt']['numb']['1'];
		$model->time_laps=$_POST['Compt']['time_laps']['2'];
		$compt=Compt::model()->find(array(
					
                            'condition' => 'id_particp_model=:id_particp_model and attempt=1',
                            'params' => array(':id_particp_model' => $_GET['id']),
					
					));
					if($compt->time_laps>=$model->time_laps)
					{
						$best_time = $compt->time_laps;
					}
					else
					{
						$best_time = $model->time_laps;
					}
		$command = Yii::app()->db->createCommand();
		
		$command->insert('compt', array(
		'id_particp_model'=>$_GET['id'],
		//'numb'=>$model->numb,
		'time_laps'=>$model->time_laps,
		'attempt'=>2,
		'best_lap'=>$best_time,
		'class_model'=>$_GET['table_id'],
				));
		
				$this->redirect(array('table','id'=>$_GET['table_id']));
		}
		if(isset($_POST['yt2']))
		{
		
		$model->attributes=$_POST['Compt'];
		$model->numb=$_POST['Compt']['numb']['2'];
		$model->time_laps=$_POST['Compt']['time_laps']['2'];
		$compt=Compt::model()->find(array(
					
                            'condition' => 'id_particp_model=:id_particp_model and attempt=1',
                            'params' => array(':id_particp_model' => $_GET['id']),
					
					));
					if($compt->time_laps>=$model->time_laps)
					{
						$best_time = $compt->time_laps;
					}
					else
					{
						$best_time = $model->time_laps;
					}
		$command = Yii::app()->db->createCommand();
		$command->insert('compt', array(
		'id_particp_model'=>$_GET['id'],
		//'numb'=>$model->numb,
		'time_laps'=>$model->time_laps,
		'attempt'=>2,
		'best_lap'=>$best_time,
		'class_model'=>$_GET['table_id'],
				));
		
				$this->redirect(array('table','id'=>$_GET['table_id']));
		}
		
		if(isset($_POST['yt3']))
		{
		
		$model->attributes=$_POST['Compt'];
		$model->numb=$_POST['Compt']['numb']['3'];
		$model->time_laps=$_POST['Compt']['time_laps']['3'];
		$compt=Compt::model()->find(array(
					
                            'condition' => 'id_particp_model=:id_particp_model and attempt=2',
                            'params' => array(':id_particp_model' => $_GET['id']),
					
					));
					if($compt->time_laps>=$model->time_laps)
					{
						$best_time = $compt->time_laps;
					}
					else
					{
						$best_time = $model->time_laps;
					}
		$command = Yii::app()->db->createCommand();
		$command->insert('compt', array(
		'id_particp_model'=>$_GET['id'],
		'numb'=>$model->numb,
		'attempt'=>3,
		'time_laps'=>$model->time_laps,
		'best_lap'=>$best_time,
		'class_model'=>$_GET['table_id'],
				));
		
				$this->redirect(array('table','id'=>$_GET['table_id']));
		}
		/*print_r($_POST);
		exit;*/
			$model->attributes=$_POST['Compt'];
			//if($model->save())
				$this->redirect(array('table','id'=>$_GET['table_id']));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Compt']))
		{
			//print_r($_POST['Compt']);
		//	exit;
			$model->attributes=$_POST['Compt'];
			$model->time_laps=$_POST['Compt']['time_laps'];
			if($model->save())
				$this->redirect(array('index','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();
		
		
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		//$dataProvider=new CActiveDataProvider('Compt');
		$model=Classmodel::model()->findAll();
		$this->render('index',array(
			'username'=>$username,
		));
	}
	
	public function actionTable()
	{
		//$dataProvider=new CActiveDataProvider('Compt');
		$model=Classmodel::model()->findAll();
		$compt=new Compt;
		 $dataProvider = new CActiveDataProvider('ParticpModel', array(
            'criteria'=>array(
                    'select'=> '*',

                    'condition'=>'id_model=:id_model',
                    'params'=>array(':id_model'=>$_GET['id']),
            ),

            'pagination'=>array(
                  //  'pageSize'=>Yii::app()->controller->module->user_page_size,
            ),
    ));
		$this->render('table',array(
			'username'=>$username,'dataProvider'=>$dataProvider, 'compt'=>$compt
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Compt('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Compt']))
			$model->attributes=$_GET['Compt'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Compt the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Compt::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Compt $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='compt-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
