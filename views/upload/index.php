<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.11.17
 * Time: 15:24
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'file')->fileInput() ?>

<?= Html::beginForm('', 'post', ['enctype' => 'multipart/form-data'])?>
<?= Html::submitButton('upload', ['class' => 'btn btn-success'])?>

<?php ActiveForm::end() ?>

