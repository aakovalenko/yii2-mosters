<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Monstertest;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$selectedMonster = (!Yii::$app->user->isGuest) ? Yii::$app->user->identity->name : '';
$monsterMap = \yii\helpers\ArrayHelper::map(\app\models\Monster::find()->all(),'name','name');
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You will find information about our site,
        but not any garlic. We avoid garlic, because it is dangerous to some of our users.
    </p>

    <code><?= __FILE__ ?></code>
</div>

<?php

$data = [
        'name' => 'Wolfman',
    'age' => 'invalidstring',
    'gender' => 'male'
];

$validateMonster1 = new Monstertest($data);
$validateMonster1->save();

//$deleteMonster = MonsterTest::findOne(['name' => 'Wolfman'])->delete();

$foundMonster1 = MonsterTest::findOne(1);
$foundMonster2 = MonsterTest::findAll(['gender' => 'm']);
?>

<hr>
<p>
    Found Monster 1 Name: <?= $foundMonster1->name?><br>
    Found Monster 2 Count: <?= count($foundMonster2)?><br>
</p>
<hr>
<p>
    Validate Monster 1 Errors: <pre><?= var_dump($validateMonster1->getErrors())?></pre>
</p>
<p><h3>Enter your favorite monster's name</h3></p>
<?= Html::beginForm()?>
<?= Html::radioList('monsterName', $selectedMonster);?>
<?= Html::input('submit', 'monsterSubmit', 'submit', ['id' => 'monsterSubmit']);?>


