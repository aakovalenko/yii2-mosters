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
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <br>
    <p>
        <?= Html::a('Create Monster', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'age',
            'gender',
            'username',
            // 'password',
            // 'authKey',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

   <!-- <hr>
    <hr>
    <hr>
    <div class="col-lg-12">Всего заказов: 2516</div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <form class="form-inline">

                <div class="form-group ">
                    <label for="orederNumber">По номеру заказа №:</label>
                    <input type="text" id="orederNumber" class="form-control" ">
                </div>
                <div class="form-group " >
                    <label for="orderStatus">По статусу заказа:</label>
                    <select id="orderStatus" class="form-control">
                        <option selected>-Все-                                          </option>
                        <option>-Не все-</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label for="showOrderQuantity">Показать:</label>
                    <select id="showOrderQuantity" class="form-control">
                        <option selected>10</option>
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                </div>
                <div class="form-group ">
                    <button type="submit" id="orderFilter" class="btn btn-success">Фильтровать</button>
                </div>
                <div class="form-group">
                    <a href="#" type="reset">Сбросить</a>
                </div>

            </form>

        </div>

    </div>
    </div>-->
</div>
</div>
