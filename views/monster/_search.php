<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\typeahead\TypeaheadBasic;
use app\models\Monster;

/* @var $this yii\web\View */
/* @var $model app\models\MonsterSearch */
/* @var $form yii\widgets\ActiveForm */

$nameData = \yii\helpers\ArrayHelper::getColumn(Monster::find()->all(),'name');
?>

<div class="monster-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>



    <?= $form->field($model, 'name')->widget(TypeaheadBasic::className(),
        [
                'data'=>$nameData,
                'options' => ['placeholder' => 'Begin typing to see suggestions..'],
                'pluginOptions' => ['highlight' => true]
        ]) ?>

    <?= $form->field($model, 'beginAge') ?>

    <?= $form->field($model, 'endAge') ?>

    <?= $form->field($model, 'gender')->dropDownList(['m'=>'Male','f'=>'Female'],
        ['prompt' => 'Please choose...']) ?>

    <?= $form->field($model, 'username') ?>



    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
