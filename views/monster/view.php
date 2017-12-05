<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Monster */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Monsters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$photoInfo = $model->PhotoInfo;
$photo = Html::img($photoInfo['url'],['alt'=>$photoInfo['alt']]);
$options = ['data-lightbox' => 'profile-image','data-title'=>$photoInfo['alt']];

?>
<div class="monster-view">

    <h1><?= Html::encode($model->username) ?>'s Profile</h1>

    <figure>
        <?=Html::a($photo, $photoInfo['url'],$options);?>
        <figcaption>(Click to enlarge)</figcaption>
    </figure>

<h2>The Gory Details</h2>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

//            'name:raw', //can put js
            'name',
            'age',
            'ProfileGender',

        ],
    ]) ?>

    <p>
        <?php if (Yii::$app->user->can('updateMonster', ['user' => $model])):?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?php endif;?>
    </p>

</div>
