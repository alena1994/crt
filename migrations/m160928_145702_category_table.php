<?php

use yii\db\Migration;
//
class m160928_145702_category_table extends Migration
{
    public function up()
    {
        $this->createTable ('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->comment('Название категории'),
            'discription' => $this->string(255)->notNull()->comment('Описание категории'),
            ], 'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица c категориями пользователей\'');

        $this->createIndex('name_index', 'category', 'name');

    }

    public function down()
    {
        $this->dropTable('category');

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
