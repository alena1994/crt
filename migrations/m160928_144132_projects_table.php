<?php

use yii\db\Migration;

class m160928_144132_projects_table extends Migration
{
    public function up()
    {
        $this->createTable('projects', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNULL ()->comment('Название проекта'),
            'category' => $this->string(255)->notNULL ()->comment('Категория которой доступен проект'),
            'description' => $this->text()->notNULL ()->comment('Описание проекта'),
            ], 'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица cо списком проектов\'');

        $this->createIndex('name_index', 'projects', 'name');
    }

    public function down()
    {
        $this->dropTable('projects');
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
