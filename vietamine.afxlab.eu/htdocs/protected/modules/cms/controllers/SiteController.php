<?php

class SiteController extends Controller
{
        public $layout='//layouts/column2';
        protected $page = null;
        
        public function filters()
	{
		return array(
			'accessControl',
		);
	}
        
        public function accessRules()
	{
		return array(
			array('allow',
                            'actions'=>array('login', 'error', 'page', 'index'),
                            'users'=>array('*'),
			),
                        array('allow',
                            'actions'=>array('logout', 'contact'),
                            'users'=>array('@'),
			),
                        array('deny',
                            'users'=>array('*'),
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
		$this->actionPage();
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
            $this->layout='//layouts/main';
            if($error=Yii::app()->errorHandler->error)
            {
                if ($error['code'] == 403)
                {
                    $this->redirect('/cms/site/login');
                }
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
		if(Yii::app()->request->isAjaxRequest )
		{
			$model->attributes=$_POST;
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Merci de nous avoir contacté. Nous vous répondrons très bientôt');
				$this->refresh();
			}
                        else
                        {
                            echo json_encode($model->getErrors());
                            die();
                        }
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
            if (Yii::app()->request->isAjaxRequest)
            {
                $model=new LoginForm;
                $model->attributes=$_POST['LoginForm'];
                $model->rememberMe = $_POST['rememberMe'];
                if($model->validate() && $model->login())
                {
                    echo 1;
                }
                else
                {
                    throw new CHttpException(400, CJavaScript::jsonEncode($model->getErrors()));
                }
                Yii::app()->end();
            }
            else
            {
                $model = PagesAR::model()->findByUrl("login");
                $this->layout = $model->structure;    
                $this->page = $model;
                $params = array();
                foreach($this->page->getWidgets() as $widget)
                {
                    $position = $widget['spot'];
                    $widget = $widget['widgets'];
                    $params[$position][] = $widget;
                }
                $this->render("//structures/".$this->page->structure, array('page'=>$model, 'widgets' => $params));
            }
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
            Yii::app()->user->logout();
            $this->redirect(Yii::app()->homeUrl);
	}
        
        public function actionPage() 
        {
            if(empty($_GET['view']))
            {
                $model = PagesAR::model()->findByUrl("home");
            }
            else
            {
                $model = PagesAR::model()->findByUrl($_GET['view']);
            }
            
            if ($model === NULL)
            {
                Yii::app()->runController($_GET['view']);
            }
            else
            {
                if (Yii::app()->acl->checkRight($model->resource))
                {
                    $this->pageTitle = Yii::app()->name . ' - ' . $model->title;
                    $this->layout = $model->structure;
                    $this->page = $model;
                    $params = array();
                    foreach($this->page->getWidgets() as $widget)
                    {
                        $position = $widget['spot'];
                        $widget = $widget['widgets'];
                        $params[$position][] = $widget;
                    }
                    
                    $this->render("//structures/".$this->page->structure, array('page'=>$model, 'widgets' => $params));
                }
                else
                {
                    throw new CHttpException(403,'You are not authorized to perform this action.');
                }
            }
        }
        
        
}