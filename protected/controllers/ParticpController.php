<?php

class ParticpController extends Controller
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
				'actions'=>array('index','view','create','update','admin', 'deletecompt', 'delete'),
				'users'=>array('*'),
			),
			/*array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),*/
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
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
	 public function actionDeletecompt()
	 {
	 
	 //$this->loadModel($id)->delete();
	Particpmodel::model()->deleteByPk($_GET['id']);
	//print_r(Particpmodel::model()->deleteByPk($_GET['id']));
	// exit;
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	$this->render('deletecompt',array(
			'model'=>$model, 'classmodel'=>$classmodel, 'particp'=>$particp
		));
	 }
	 
	public function actionCreate()
	{
		$model=new Particp;
		$particp=new ParticpModel;
		 $classmodel=ClassModel::model()->findAll(); 
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
	//print_r();
	//exit;
		if(isset($_POST['Particp']))
		{
			$model->attributes=$_POST['Particp'];
			$model->lastname = $_POST['Particp']['lastname'];
			$model->firstname = $_POST['Particp']['firstname'];
			$model->middlename = $_POST['Particp']['middlename'];
			$model->datebirth = strtotime($_POST['Particp']['datebirth']);
			$model->team = $_POST['Particp']['team'];
			$model->status = $_POST['Particp']['status'];
			if($model->save());
			
			$username=Particp::model()->find(array(
					
                            'condition' => 'lastname=:lastname and firstname=:firstname',
                            'params' => array(':lastname' => $model->lastname, ':firstname'=>$model->firstname),
					
					));
		
			$id_particp = $_POST['ParticpModel']['id_particp'];
			$command = Yii::app()->db->createCommand();
			foreach($id_particp as $key => $value) {
			if($value==1) {
			$command->insert('particp_model', array(
									'id_particp'=>$username->id,
									'id_model'=>$key,
									));
			}
			}
			
				$this->redirect(array('admin','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model, 'classmodel'=>$classmodel, 'particp'=>$particp
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

		$particp=new ParticpModel;
		 $classmodel=ClassModel::model()->findAll(); 
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
	
		if(isset($_POST['Particp']))
		{
		$model->attributes=$_POST['Particp'];
		
		if(isset($_POST['ParticpModel']['id_particp']['1']))
		{
			$id_particp = $_POST['ParticpModel']['id_particp'];
			$command = Yii::app()->db->createCommand();
			foreach($id_particp as $key => $value) {
			if($value==1) {
			$command->insert('particp_model', array(
									'id_particp'=>$model->id,
									'id_model'=>$key,
									));
			}
			}
		}
	
		
			
			$model->lastname = $_POST['Particp']['lastname'];
			$model->firstname = $_POST['Particp']['firstname'];
			$model->middlename = $_POST['Particp']['middlename'];
			$model->datebirth = strtotime($_POST['Particp']['datebirth']);
			$model->team = $_POST['Particp']['team'];
			$model->status = $_POST['Particp']['status'];
			if($model->save());
			
			$username=Particp::model()->find(array(
					
                            'condition' => 'lastname=:lastname and firstname=:firstname',
                            'params' => array(':lastname' => $model->lastname, ':firstname'=>$model->firstname),
					
					));
		
			$id_particp = $_POST['ParticpModel']['id_particp'];
		
			$command = Yii::app()->db->createCommand();
			foreach($id_particp as $key => $value) {
			/*if($value==1) {
			$command->update('particp_model', array(
									'id_particp'=>$username->id,
									'id_model'=>$key,
									));
			}*/
			}
			
				$this->redirect(array('admin','id'=>$model->id));
		}


		$this->render('update',array(
			'model'=>$model, 'classmodel'=>$classmodel, 'particp'=>$particp
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		
		$particpdel = Particpmodel::model()->findAll('id_particp=:id_particp', array(':id_particp'=>$_GET['id']));
		foreach($particpdel as $valuer)
		{
			//print_r($valuer->id);
			print_r(Compt::model()->deleteAll('id_particp_model=:id_particp_model', array(':id_particp_model'=>$valuer->id)));
		}
		
		//exit;
		$this->loadModel($id)->delete();
		Particpmodel::model()->deleteAll('id_particp=:id_particp', array(':id_particp'=>$_GET['id']));
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Particp');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Particp('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Particp']))
			$model->attributes=$_GET['Particp'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Particp the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Particp::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Particp $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='particp-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
