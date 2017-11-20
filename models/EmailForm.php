<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.11.17
 * Time: 15:50
 */

namespace app\models;

use yii\base\Model;
use yii\captcha\Captcha;

class EmailForm extends Model
{
    public $email;
    public $verifyCode;

    public function rules()
    {
        return [
            ['email', 'email'],
            ['verifyCode', 'captcha', 'skipOnEmpty' => !Captcha::checkRequirements(), 'captchaAction' => 'email/captcha']
        ];
    }
}