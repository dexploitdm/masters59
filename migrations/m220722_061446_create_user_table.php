<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m220722_061446_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'email' => $this->string(255),
            'password' => $this->string(255),
            'photo' => $this->string(255),
            'isAdmin' => $this->integer()->defaultValue(0)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
