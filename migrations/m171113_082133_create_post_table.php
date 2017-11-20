<?php

use yii\db\Migration;
use yii\db\cubrid\Schema;

/**
 * Handles the creation of table `post`.
 */
class m171113_082133_create_post_table extends Migration
{

    const TABLE_NAME = '{{%post}}';
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
            'title' => Schema::TYPE_STRING.'(255) NOT NULL',
            'content' => Schema::TYPE_TEXT.' NOT NULL',
        ], $tableOptions);

        for ($i = 1; $i < 7; $i++) {
            $this->insert(self::TABLE_NAME, [
                'title' => 'Test article #'.$i,
                'content' => 'lorem ipsun.......'
                             .'sed si amet.'
                             .'phasellus arcu massa'
                             .'rhonus ut enim',
            ]);
        }
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
