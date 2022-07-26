<?php

use yii\db\Migration;

/**
 * Handles the creation of table `catalog`.
 */
class m220722_060118_create_catalog_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('catalog', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('catalog');
    }
}
