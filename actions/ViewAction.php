<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.11.17
 * Time: 10:44
 */
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.11.17
 * Time: 10:44
 */
namespace app\actions;

use yii\base\Action;
use yii\web\NotFoundHttpException;


class ViewAction extends Action
{
    public $modelClass;

    public function run($id)
    {
        $class = $this->modelClass;

        if (($model = $class::findOne($id)) === null) {
            throw new NotFoundHttpException('The request page not exist.');
        }

        return $this->controller->render('//crud/view', [
            'model' => $model
        ]);
    }
}