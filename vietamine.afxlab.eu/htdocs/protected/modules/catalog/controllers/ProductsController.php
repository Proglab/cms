<?php
class ProductsController extends Controller
{
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + add', // we only allow deletion via POST request
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
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('add'),
				'expression'=>'Yii::app()->user->isAdmin()',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionAdd()
        {
            if(Yii::app()->request->isAjaxRequest)
            {
                $errors = array();
                $product = new CatalogProducts;
                $product->attributes = $_POST['catalog_products'];
                $product->catalog_cat_id = $_POST['catalog_products']['catalog_cat_id'];
                $product->active = $_POST['catalog_products']['active'];
                if ($product->save())
                {
                    $localisation = new CatalogProductsLocalisation;
                    $localisation->attributes = $_POST['catalog_products_localisation'];
                    $localisation->catalog_products_id = $product->id;
                    if (!$localisation->save())
                    {
                        $errors = array_merge ($errors, $localisation->getErrors());
                    }

                    foreach($_POST['catalog_products_formula'] as $product_formula)
                    {
                        
                        $formula = new CatalogProductsFormula;
                        $formula->attributes = $product_formula;
                        $formula->catalog_products_id = $product->id;
                        if (!$formula->save())
                        {
                            $errors = array_merge ($errors, $formula->getErrors());
                        }
                    }

                    $dates = new CatalogProductsDates;
                    $dates->start_date = implode('-', array_reverse(explode('/', $_POST['catalog_products_dates']['start_date'])));
                    $dates->end_date = implode('-', array_reverse(explode('/', $_POST['catalog_products_dates']['end_date'])));
                    $dates->start_hour = $_POST['catalog_products_dates']['start_hour'];
                    $dates->end_hour = $_POST['catalog_products_dates']['end_hour'];
                    $dates->catalog_products_id = $product->id;
                    if (!$dates->save())
                    {
                        $errors = array_merge ($errors, $dates->getErrors());
                    }
                }
                else
                {
                    $errors = array_merge ($errors, $product->getErrors());
                }
                
                if (!empty($errors))
                {
                    throw new CHttpException(400, CJavaScript::jsonEncode($errors));
                }
                else
                {
                    echo $product->id;
                    Yii::app()->end();
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
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
