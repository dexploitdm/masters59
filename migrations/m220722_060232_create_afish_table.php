<?php

use yii\db\Migration;

/**
 * Handles the creation of table `afish`.
 */
class m220722_060232_create_afish_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('afish', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'name' => $this->string(255),
            'description' => $this->text(),
            'phone' => $this->string(255),
            'content' => $this->text(),
            'image' => $this->string(),
            'viewed' => $this->integer(),
            'catalog_id' => $this->integer(),
            'date' => $this->dateTime(),
            'status' => $this->integer()->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('afish');
    }
}
