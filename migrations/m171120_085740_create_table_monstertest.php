<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m171120_085740_create_table_monstertest
 */
class m171120_085740_create_table_monstertest extends Migration
{
    const TABLE_NAME = '{{%monstertest}}';
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable(self::TABLE_NAME, [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING.'(255) NOT NULL',
            'age' => Schema::TYPE_INTEGER.' NOT NULL',
            'gender' =>Schema::TYPE_STRING.'(1) NOT NULL'
        ], $tableOptions);


            $this->insert(self::TABLE_NAME, [
                'name' => 'Dracula',
                'age' => '999',
                'gender' => 'm'
            ]);

            $this->insert(self::TABLE_NAME, [
            'name' => 'Frankenstein',
            'age' => '2',
            'gender' => 'm'
        ]);

        $this->insert(self::TABLE_NAME, [
            'name' => 'Medusa',
            'age' => '34',
            'gender' => 'f'
        ]);

        $this->insert(self::TABLE_NAME, [
            'name' => 'Mummy',
            'age' => '86',
            'gender' => 'm'
        ]);

        $this->insert(self::TABLE_NAME, [
            'name' => 'Wicked Witch',
            'age' => '40',
            'gender' => 'f'
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
