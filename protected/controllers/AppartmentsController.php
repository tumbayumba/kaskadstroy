<?php

class AppartmentsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	public $defaultAction='index';

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
				'actions'=>array('index','view','summary'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
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
		$model = $this->loadModel($id);
		$house = House::model()->find(array('condition'=>'id=:hid','params'=>array(':hid'=>$model->house_id)));
		$type = Apptype::model()->find(array('condition'=>'id=:id','params'=>array(':id'=>$model->type_id)));
		$this->render('view',array(
			'model'=>$model,
			'type'=>$type,
			'house'=>$house,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($house_id)
	{
		$model=new Appartments;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Appartments']))
		{
			$model->attributes=$_POST['Appartments'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Appartments']))
		{
			$model->attributes=$_POST['Appartments'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
	public function actionIndex($house_id)
	{
		$dataProvider=new CActiveDataProvider('Appartments');
		$model = new Appartments;
		$house = House::model()->find(array('condition'=>'id=:hid','params'=>array(':hid'=>$house_id)));
		$complex = Complex::model()->find(array('condition'=>'id=:cid','params'=>array(':cid'=>$house->complex_id)));
		$stages = Stages::model()->findAll(array('condition'=>'house_id=:hid','params'=>array(':hid'=>$house_id)));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
			'house'=>$house,
			'complex'=>$complex,
			'stages'=>$stages,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Appartments('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Appartments']))
			$model->attributes=$_GET['Appartments'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Appartments the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Appartments::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Appartments $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='appartments-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public static function getType($type_id){
		$type = Apptype::model()->find('id=:type_id',array(':type_id'=>$type_id));
		return $type->name;
	}
	
	public static function getTypesDropDown(){
		$types = Apptype::model()->findAll();
		foreach($types as $type){
			$t[$type->id] = $type->name;
		}
		return $t;
	}
	
	public static function getHouseName($house_id){
		$house = House::model()->find(array('condition'=>'id=:hid','params'=>array(':hid'=>$house_id)));
		return $house->house_name;
	}
	
	public static function getComplexName($complex_id){
		$complex = Complex::model()->find(array('condition'=>'id=:cid','params'=>array(':cid'=>$complex_id)));
		return $complex->complex_name;
	}
	
	public function actionSummary(){
		$model = new Appartments;
		$complex = Complex::model()->findAll();
		$this->render('summary',array(
			'model'=>$model,
			'complex'=>$complex,
			//'house'=>$house,
			//'complex'=>$complex,
			//'stages'=>$stages,
		));
	}
}
