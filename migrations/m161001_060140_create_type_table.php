<?php

use yii\db\Migration;

/**
 * Handles the creation for table `type`.
 */
class m161001_060140_create_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('type', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->comment('Имя пользователя'),
            'authKey' => $this->integer(255)->notNull()->comment(''),
            'accessToken' => $this->integer(255)->notNull()->comment(''),
            ], 'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица со списком пользователей\'');

        $this->createIndex('name_index', 'type', 'name');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('type');
    }
}
