<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MonsterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Monsters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monster-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= \yii\widgets\ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_monster',
            'itemOptions' => ['class' => 'list-monster'],
            'layout' => "{sorter}\n{summary}\n{items}\n{pager}"
]);?>

</div>

