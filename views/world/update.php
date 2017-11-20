<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\World */

$this->title = 'Update World: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Worlds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="world-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
