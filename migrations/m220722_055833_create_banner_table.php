<?php

use yii\db\Migration;

/**
 * Handles the creation of table `banner`.
 */
class m220722_055833_create_banner_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('banner', [
            'id' => $this->primaryKey(),
            'title1' => $this->string(255),
            'title2' => $this->string(255),
            'text1' => $this->string(),
            'text2' => $this->string(),
            'description' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('banner');
    }
}
