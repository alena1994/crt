<?php

use yii\db\Migration;
//
class m160928_142929_users_table extends Migration
{
    public function up()
    {
    	$this->createTable('users', [
    		'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->comment('Имя пользователя'),
            'surname' => $this->string(255)->notNull()->comment('Фамилия пользователя'),
            'email' => $this->string(255)->notNull()->comment('Почта\логин пользователя'),
            'password' => $this->string(255)->notNull()->comment('Пароль пользователя'),
            'authKey' => $this->integer(255)->notNull()->comment(''),
            'accessToken' => $this->integer(255)->notNull()->comment(''),
            ], 'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица со списком пользователей\'');

        $this->createIndex('email_index', 'users', 'email');
        
    }

    public function down()
    {
         $this->dropTable('users');
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
