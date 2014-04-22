<?php

class UserController extends Controller
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
			'postOnly + add, edit', // we only allow deletion via POST request
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
				'actions'=>array('add', 'edit'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionAdd()
	{
            if(Yii::app()->request->isAjaxRequest)
            {
                $model=new UsersChildren;
                $model->attributes=$_POST;
                $model->users_id = Yii::app()->user->id;
                $model->birthdate = $_POST['birthday_year'].'-'.$_POST['birthday_month'].'-'.$_POST['birthday_day'];
                if($model->save())
                {
                    $this->renderPartial("//widgets/account-children/_profile-edit-form", array('child_user'=>$model));
                }
                else
                {
                    throw new CHttpException(400, CJavaScript::jsonEncode($model->getErrors()));
                }
            }
            else
            {
                throw new CHttpException(400, 'Bien essayé ;)');
            }
	}
        
        public function actionEdit()
	{
            if(Yii::app()->request->isAjaxRequest)
            {
                $model= UsersChildren::model()->findByPk($_POST['id']);
                $model->attributes=$_POST;
                $model->birthdate = $_POST['birthday_year'].'-'.$_POST['birthday_month'].'-'.$_POST['birthday_day'];
                if($model->save())
                {
                    $this->renderPartial("//widgets/account-children/_profile-edit-form", array('child_user'=>$model));
                }
                else
                {
                    throw new CHttpException(400, CJavaScript::jsonEncode($model->getErrors()));
                }
            }
            else
            {
                throw new CHttpException(400, 'Bien essayé ;)');
            }
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return UsersChildren the loaded model
	 * @throws CHttpException
	 */
	protected function loadModel($id)
	{
		$model=UsersChildren::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param UsersChildren $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-children-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
