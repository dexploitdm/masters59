<?php

use yii\db\Migration;

/**
 * Handles the creation of table `zovs`.
 */
class m220722_065338_create_zovs_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('zovs', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'status' => $this->integer()->defaultValue(0),
            'date' => $this->dateTime(),
            'text' => $this->string(255),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('zovs');
    }
}
