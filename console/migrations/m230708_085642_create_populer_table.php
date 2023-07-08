<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%populer}}`.
 */
class m230708_085642_create_populer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%populer}}', [
            'id' => $this->primaryKey(),
            'view' => $this->string(255)->notNull(),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%populer}}');
    }
}
