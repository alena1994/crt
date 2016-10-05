<?php

use yii\db\Migration;

/**
 * Handles the creation for table `access`.
 */
class m161001_075246_create_access_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('access', [
            'id' => $this->primaryKey(),
            'type' => $this->string(255)->notNull()->comment('тип доступа'),
            'login' => $this->string(255)->notNull()->comment('Логин для входа в проект'),
            'password' => $this->integer(255)->notNull()->comment('Пароль для входа в проект'),
            'project_id' => $this->integer(255)->notNull()->comment('id проекта'),
            'authKey' => $this->integer(255)->notNull()->comment(''),
            'accessToken' => $this->integer(255)->notNull()->comment(''),
            ], 'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица со списком проектов\'');

        $this->createIndex('type_index', 'access', 'type');
        $this->addForeignKey('FK_type', 'access', 'project_id', 'project', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('access');
    }
}
