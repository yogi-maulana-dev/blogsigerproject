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
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
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
