<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 20.11.17
 * Time: 15:34
 */

namespace app\commands;

use yii\console\Controller;
use app\models\Monster;
use Yii;

//./yii monster/load-monsters   run in console


class MonsterController extends Controller
{
    public function actionLoadMonsters()
    {
        Monster::deleteAll();

        $monsterData = [
            [
                'name' => 'Dracule',
                'age' => 999,
                'gender' => 'm',
                'username' => 'fangman999',
                'password' => 'yummyblood',
            ],
            [
                'name' => 'Frankenstein',
                'age' => 2,
                'gender' => 'm',
                'username' => 'stitchedtogether',
                'password' => 'boltneck',
            ],
            [
                'name' => 'Mummy',
                'age' => 86,
                'gender' => 'm',
                'username' => 'dirtyragdude',
                'password' => 'wrappedtight',
            ],
            [
                'name' => 'Wicked Witch',
                'age' => 40,
                'gender' => 'f',
                'username' => 'broomrider4eva',
                'password' => 'getyoumypretty',
            ],
            [
                'name' => 'Medusa',
                'age' => 34,
                'gender' => 'f',
                'username' => 'shakehairgirl',
                'password' => 'dontlooknow',
            ],

        ];

        foreach ($monsterData as $data) {
            $monster = new Monster($data);
            $monster->hashPassword = true;
            $monster->save();
        }
    }

    public function actionPermissions()
    {
        $auth = Yii::$app->authManager;

        $updateMonster = $auth->createPermission('updateMonster');
        $updateMonster->description = 'Update a monster';
        $auth->add($updateMonster);

        $deleteMonster = $auth->createPermission('deleteMonster');
        $deleteMonster->description = 'Delete a monster';
        $auth->add($deleteMonster);
    }

    public function actionRoles()
    {
        $auth = Yii::$app->authManager;
    }


}