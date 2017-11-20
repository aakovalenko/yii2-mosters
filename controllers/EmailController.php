<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.11.17
 * Time: 15:52
 */

namespace app\controllers;

use Yii;
use yii\base\Controller;
use app\models\EmailForm;

class EmailController extends Controller
{

    public function actions()
    {
        return [
            'captcha' => [
                //'class' => 'yii\captcha\CaptchaAction',
                'class' => 'app\components\MathCaptchaAction',
                'minLength' => 1,
                'maxLength' => 10
            ]
        ];
    }

    public function actionIndex()
    {
        $success = false;
        $model = new EmailForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->session->setFlash('success', 'Success!');
        }
        return $this->render('index', [
            'model' => $model,
            'success' => $success,
        ]);
    }
}