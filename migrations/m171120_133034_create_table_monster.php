<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m171120_133034_create_table_monster
 */
class m171120_133034_create_table_monster extends Migration
{
    /**
     * @inheritdoc
     */
    const TABLE_NAME = '{{%monster}}';
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
            'gender' =>Schema::TYPE_STRING.'(1) NOT NULL',
            'username' =>Schema::TYPE_STRING.'(100) NOT NULL',
            'password' =>Schema::TYPE_STRING.'(255) NOT NULL',
            'authKey' =>Schema::TYPE_STRING.'(255) NOT NULL'
        ], $tableOptions);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
