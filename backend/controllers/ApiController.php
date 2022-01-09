<?php

namespace backend\controllers;

use Yii;
use yii\web\Response;


class ApiController extends \yii\web\Controller
{
    public function beforeAction($action) {
        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionHello()
    {
        $response = Yii::$app->getResponse();
        $response->format = Response::FORMAT_JSON;
        $response->data = ['result'=>1, 'message'=>'Welcome to Riskcube authentication api', 'data' => ['version' => '1.0.0']];

        $response->send();
    }

}
