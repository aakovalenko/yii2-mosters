<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MonstertestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Monstertests';
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'description', 'content'=>'Thiss is my first Yii application!']);
$this->registerJsFile('//cdnjs.cloudflare.com/ajax/libs/lodash.js/4.3.0/lodash.j', [
    'position' => $this::POS_HEAD]);
?>
<div class="monstertest-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>


 <?= ListView::widget([
         'dataProvider' => $dataProvider,
          'itemView' => '_monster',
           'itemOptions' => ['class' => 'list-monster']
]);?>


