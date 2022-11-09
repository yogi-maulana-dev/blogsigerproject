<?php

use yii\db\Migration;

/**
 * Class m221107_193004_create_berita
 */
class m221107_193004_create_berita extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

         $this->createTable('berita', [
            'id_berita' => $this->primaryKey(),
            'judul' => $this->string()->notNull(),
            'gambar' => $this->string()->Null(),
            // 'auth_key' => $this->string(32)->notNull(),
            // 'password_hash' => $this->string()->notNull(),
            // 'password_reset_token' => $this->string()->unique(),
            'isi' => $this->text(),
            'id_admin' => $this->string(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m221107_193004_create_berita cannot be reverted.\n";

        // return false;
        $this->dropTable('berita');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221107_193004_create_berita cannot be reverted.\n";

        return false;
    }
    */
}
