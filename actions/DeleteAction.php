<?php

/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.11.17
 * Time: 10:44
 */
namespace app\actions;

use yii\web\NotFoundHttpException;
use yii\base\Action;

class DeleteAction extends Action
{
    public $modelClass;

    public function run($id)
    {
        $class = $this->modelClass;

        if (($model = $class::findOne($id)) === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        $model->delete();

        return $this->controller->redirect(['index']);
    }
}