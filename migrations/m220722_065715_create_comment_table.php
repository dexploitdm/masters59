<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m220722_065715_create_comment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'afish_id' => $this->integer(),
            'status' => $this->integer()->defaultValue(0),
            'text' => $this->string(255),
            'date' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comment');
    }
}
