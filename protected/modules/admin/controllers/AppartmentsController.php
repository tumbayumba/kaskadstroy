<?php

class AppartmentsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='/layouts/column2';
	public $defaultAction='admin';

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
				'actions'=>array(),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(),
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
		$house = House::model()->findByPk($model->house_id);
		$this->render('view',array(
			'model'=>$model,
			'house'=>$house,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($house_id)
	{
		$house = House::model()->findByPk($house_id);
		$model=new Appartments;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Appartments']))
		{
			$model->attributes=$_POST['Appartments'];
			$model->image=CUploadedFile::getInstance($model,'image');
			$model->house_id = $house_id;
			if($model->save()){
				if($model->image!='' && $model->image!=null){
					$uploaddir = 'images/complex/'.$house->house_name.'/';
					if (!file_exists($uploaddir)){
					   mkdir($uploaddir, 0700, true);
					}
					$model->image->saveAs($uploaddir.$model->image);
				}
				$this->redirect(array('admin','house_id'=>$house->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'house'=>$house,
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
		$house = House::model()->findByPk($model->house_id);
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Appartments']))
		{
			$model->attributes=$_POST['Appartments'];
			if(CUploadedFile::getInstance($model,'image')!='' && CUploadedFile::getInstance($model,'image')!=null)
				$model->image=CUploadedFile::getInstance($model,'image');
			if($model->save()){
				if(CUploadedFile::getInstance($model,'image')!='' && CUploadedFile::getInstance($model,'image')!=null){
					$uploaddir = 'images/complex/'.$house->house_name.'/';
					if (!file_exists($uploaddir)){
					   mkdir($uploaddir, 0700, true);
					}
					$model->image->saveAs($uploaddir.$model->image);
				}
				$this->redirect(array('admin','house_id'=>$house->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'house'=>$house,
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
		$dataProvider=new CActiveDataProvider('Appartments');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($house_id)
	{
		$house = House::model()->findByPk($house_id);
		$complex = Complex::model()->findByPk($house->complex_id);
		$model=new Appartments('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Appartments']))
			$model->attributes=$_GET['Appartments'];

		$this->render('admin',array(
			'model'=>$model,
			'house'=>$house,
			'complex'=>$complex,
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
}
