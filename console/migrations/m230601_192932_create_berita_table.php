<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%berita}}`.
 */
class m230601_192932_create_berita_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%berita}}', [
            'id' => $this->primaryKey(),
            'judul' => $this->string()->notNull(),
            'gambar' => $this->string()->notNull(),
            'isi' => $this->text()->notNull(),

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
        $this->dropTable('{{%berita}}');
    }
}
