<?php

use yii\helpers\Html;
use yii\captcha\Captcha;
use yii\widgets\ActiveForm;
?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
<div class="alert alert-success"><?=Yii::$app->session->getFlash('success')?></div>
<?php else: ?>

<?php $form = ActiveForm::begin()?>
<div class="control-group">
    <div class="controls">
        <?= $form->field($model, 'email')->textInput(['class' => 'form-control']); ?>
        <?= Html::error($model, 'email', ['class' => 'help-block'])?>
    </div>
</div>

    <?php if (Captcha::checkRequirements() && Yii::$app->user->isGuest): ?>
        <div class="control-group">
            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(),[
                'captchaAction' => 'email/captcha'
            ]) ?>
        </div>
        <?php endif; ?>

<div class="control-group">
    <label for="" class="control-label"></label>
    <div class="controls">
        <?=Html::submitButton('Submit', ['class' => 'btn btn-success'])?>
    </div>
</div>
<?php ActiveForm::end()?>
<?php endif;?>
