<?php

/* @var $this yii\web\View */

$this->title = 'Monster Mah';
$btnClass = 'btn btn-lrg ';
$btnClass .= (date('s')%2) ? 'btn-warning' : 'btn-success';
?>
<div class="site-index">

    <div class="jumbotron">

        <h1>Welcome to Monster Mash!</h1>

        <p class="lead">The place to find love for life, the afterlife and beyond.</p>


                <p><?=\yii\helpers\Html::a('Find Your Match', '/monster',['class'=> $btnClass])?></p>
            </div>
        </div>

    </div>
</div>
