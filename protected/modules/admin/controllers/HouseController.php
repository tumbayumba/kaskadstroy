<?php

class HouseController extends Controller
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
		$complex = Complex::model()->findByPk($model->complex_id);
		$this->render('view',array(
			'model'=>$model,
			'complex'=>$complex,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($complex_id)
	{
		$complex = Complex::model()->findByPk($complex_id);
		$model=new House;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['House']))
		{
			$model->attributes=$_POST['House'];
			$model->image=CUploadedFile::getInstance($model,'image');
			$model->floorplan_image=CUploadedFile::getInstance($model,'floorplan_image');
			$model->complex_id = $complex_id;
			if($model->save()){
				if($model->image!='' && $model->image!=null)
					$model->image->saveAs('images/house/'.$model->image);
				if($model->floorplan_image!='' && $model->floorplan_image!=null)
					$model->floorplan_image->saveAs('images/floorplan_image/'.$model->floorplan_image);
				$this->redirect(array('admin','complex_id'=>$complex->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'complex'=>$complex,
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
		$complex = Complex::model()->findByPk($model->complex_id);
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['House']))
		{
			$model->attributes=$_POST['House'];
			
			if(CUploadedFile::getInstance($model,'image')!='' && CUploadedFile::getInstance($model,'image')!=null)
				$model->image=CUploadedFile::getInstance($model,'image');
			if(CUploadedFile::getInstance($model,'floorplan_image')!='' && CUploadedFile::getInstance($model,'floorplan_image')!=null)
				$model->floorplan_image=CUploadedFile::getInstance($model,'floorplan_image');
			if($model->save()){
				if(CUploadedFile::getInstance($model,'image')!='' && CUploadedFile::getInstance($model,'image')!=null)
					$model->image->saveAs('images/house/'.$model->image);
				if(CUploadedFile::getInstance($model,'floorplan_image')!='' && CUploadedFile::getInstance($model,'floorplan_image')!=null)
					$model->floorplan_image->saveAs('images/floorplan_image/'.$model->floorplan_image);
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'complex'=>$complex,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model = $this->loadModel($id);
		$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin','complex_id'=>$model->complex_id));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('House');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($complex_id)
	{
		$complex = Complex::model()->findByPk($complex_id);
		$model=new House('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['House']))
			$model->attributes=$_GET['House'];

		$this->render('admin',array(
			'model'=>$model,
			'complex'=>$complex,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return House the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=House::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param House $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='house-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
