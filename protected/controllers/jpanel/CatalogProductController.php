<?php

class CatalogProductController extends Controller
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
				'actions'=>array('index','view'),
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

        
	public function actionView($id)
	{
            /*criteria for catalog*/
            $criteria1=new CDbCriteria();  
            $criteria1->condition = 'cat_parent_id= :catpid';
            $criteria1->order='category_id DESC';
            $criteria1->params = array (':catpid'=>$id);
            $count1=  CategoryProduct::model()->count($criteria1);
            $pagescat=new CPagination($count1);

            $pagescat->pageSize=6;
            $pagescat->applyLimit($criteria1);
            $modelcat=  CategoryProduct::model()->findAll($criteria1);
            /*criteria for catalog*/
            
            /*criteria for prdocts*/
            $criteria=new CDbCriteria();  
            $criteria->condition = 'category_id = :catid';
            $criteria->order='prod_id DESC';
            $criteria->params = array (':catid'=>$id);
            $count=Products::model()->count($criteria);
            $pagesprod=new CPagination($count);

            $pagesprod->pageSize=6;
            $pagesprod->applyLimit($criteria);
            $modelkat=  Products::model()->findAll($criteria);
            /*criteria for prdocts*/
		$this->render('view',array(
                        'modelkat' => $modelkat,
                        'modelcat' => $modelcat,
                        'model' => $this->loadModel($id),
                        'pagesprod' => $pagesprod,
                        'pagescat' => $pagescat,
			
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new CategoryProduct;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['CategoryProduct']))
		{
			$model->attributes=$_POST['CategoryProduct'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->category_id));
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

		if(isset($_POST['CategoryProduct']))
		{
			$model->attributes=$_POST['CategoryProduct'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->category_id));
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
		$dataProvider=new CActiveDataProvider('CategoryProduct');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new CategoryProduct('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['CategoryProduct']))
			$model->attributes=$_GET['CategoryProduct'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return CategoryProduct the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=CategoryProduct::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CategoryProduct $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='category-product-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
