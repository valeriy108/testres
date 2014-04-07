<?php
class DocumentsController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
   // public $layout = '/layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
           array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'Print',),
                'users' => array('*'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionIndex($id) {
		/*print_r($_POST);
		exit;*/
		
		

        if (isset($_POST['text_export_print']) && $_POST['text_export_print']!='') {
            $html = $_POST['text_export_print'];
            require_once(yii::getPathofAlias('application.components.pdf') . '/dompdf_rus/dompdf_config.inc.php');
            //spl_autoload_unregister(array('YiiBase', 'autoload'));
            spl_autoload_register('DOMPDF_autoload');
            $dompdf = new DOMPDF();
            $dompdf->set_paper("a4", "portrait");
            $dompdf->load_html($html);
            $dompdf->render();
            $dompdf->stream('IAS', array("Attachment" => true));
            return;
        }
       //  if(isset($_POST['type_doc'])){
             $this->layout = '//layouts/main';
             $particm=Particpmodel::model()->findAll('id_model=:id_model', array(':id_model'=>$_GET['id']));
             $this->render('printdocuments',array('document'=>$_GET['doc'],'particm'=>$particm));
             exit();
         //}
        
        $this->render('documents');
    }

    public function actionPrint() {
        
    }

}