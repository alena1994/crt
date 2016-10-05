<?php

use yii\db\Migration;

/**
 * Handles the creation for table `project`.
 */
class m161001_060837_create_project_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->comment('Имя пpoeкта'),
            'user_id' => $this->integer(255)->notNull()->comment('Пользователь, которому доступен проект'),
            'authKey' => $this->integer(255)->notNull()->comment(''),
            'accessToken' => $this->integer(255)->notNull()->comment(''),
            ], 'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица со списком проектов\'');

        $this->createIndex('name_index', 'project', 'name');
        $this->addForeignKey('FK_project', 'project', 'user_id', 'users', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('project');
    }
}
