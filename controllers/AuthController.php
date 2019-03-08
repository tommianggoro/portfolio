<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\ContactForm;

class AuthController extends Controller
{

	public $layout = 'auth';

    public function actionIndex()
    {
        return $this->redirect('login');
    }

    public function actionLogin()
    {
    	echo 'aaa';exit;
    	if(Yii::$app->request->post()){
    		var_dump('aa');exit;
    	}
        return $this->render('login');
    }

    public function actionLogout()
    {
        return $this->render('logout');
    }


    public function actionContact()
    {
    	$model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
            'name' => Yii::$app->name
        ]);
    }

}
