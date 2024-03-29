<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categori}}`.
 */
class m230704_063845_create_categori_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categori}}', [
            'id' => $this->primaryKey(),
            'judul' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%categori}}');
    }
}
