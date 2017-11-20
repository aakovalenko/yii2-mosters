<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 20.11.17
 * Time: 10:38
 */
namespace app\components;

class View extends \yii\web\View
{
    function render($view, $params = [], $context = null)
    {
        return str_ireplace('garlic','g#%@c', parent::render($view, $params, $context));
    }
}